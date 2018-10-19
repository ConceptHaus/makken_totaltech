<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Carbon;
use DB;
use Mail;
use Validator;
use Carbon\Carbon;

use App\User;
use App\Direccion;
use App\Premio;
use App\Ticket;
use App\Ganador;
use App\Establecimiento;
use App\Seccion;
use App\Texto;
use App\Semanas;

class AdminController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('isAdmin')->except('logout');
    }

    //VISTAS ADMIN
    public function getDashboard() {
      return view('admin/dashboard');
    }

    public function usuariosRegistrados() {
        return view('admin/usuarios_registrados');
    }

    public function usuariosGanadores() {
        $data['semanas'] = Semanas::all();
        return view('admin/usuarios_ganadores',$data);
    }

    public function usuarioDetalle($id) {
        $data['user'] = User::getUser($id);

        $data['tickets_totales'] = User::where('users.id','=', $id)
                                    ->leftjoin('tickets', 'tickets.id_usuario', '=', 'users.id')
                                    ->select('users.id', DB::raw("SUM(tickets.monto) as monto_total"), DB::raw("COUNT(tickets.id_ticket) AS num_tickets"), DB::raw('DATE_FORMAT(tickets.created_at, "%d-%c-%Y") as fecha_ganador') )
                                    ->groupBy(DB::raw('CAST(tickets.created_at AS DATE)'))
                                    ->get();

                                    // $data['tickets_totales'] = User::where('users.id','=', $id)
        //                             ->leftjoin('tickets', 'tickets.id_usuario', '=', 'users.id')
        //                             ->select('users.id', DB::raw("SUM(tickets.monto) as monto_total"), DB::raw("COUNT(tickets.id_ticket) AS num_tickets"))
        //                             ->get();
                                    // ->groupBy(function($date){
                                    //     return Carbon::parse($date->fecha)->format('d M');
                                    // });

        // $tickets = $user->tickets()->sum()->get()->groupBy(function($date){
        //     return Carbon::parse($date->created_at)->format('d M');
        // });


        //                             return response()->json($tickets,200);

        return view('admin/usuario_detalle',$data);
    }

    public function nuevoUsuario() {
        return view('admin/nuevo_usuario');
    }

    public function ticketsRegistrados() {
        return view('admin/tickets_registrados');
    }

    public function nuevoTicket() {
        $data['users'] = User::getAllUsers();
        $data['establecimientos'] = Establecimiento::all();
        return view('admin/nuevo_ticket',$data);
    }

    public function establecimientos() {
        return view('admin/establecimientos');
    }

    public function nuevoEstablecimiento() {
        return view('admin/nuevo_establecimiento');
    }

    public function editarEstablecimiento() {
        return view('admin/editar_establecimiento');
    }

    //API ADMIN

    //METHOD POST
    public function validadorTickets(array $data){
        return Validator::make($data, [
            //Validación de datos de tickets
            'id_usuario'=>'required|numeric',
            'no_ticket'=>'required|string|unique:tickets,no_ticket',
            'monto' => 'required|numeric',
            'id_establecimiento'=>'required|numeric',
            'fileticket'=>'required|image',

        ]);
    }
    public function uploadTicketS3($file,$user){
        //Sube tickets a bucket de Amazon
        $disk = Storage::disk('s3');
        $path = $file->store('users/'.$user.'/tickets','s3');
        return $path;


    }
    public function adminRegisterTicket(Request $request){
        $user = User::where('id',$request->id_usuario)->first();

        $validator = $this->validadorTickets($request->all());

        if($validator->passes()){
            DB::beginTransaction();
            try{
                $ticket = new Ticket();
                $ticket->id_usuario = $user->id;
                $ticket->no_ticket = $request->no_ticket;
                $ticket->monto = $request->monto;
                $ticket->id_establecimiento = $request->id_establecimiento;
                $ticket->otro_establecimiento = $request->otro_establecimiento;
                $ticket->url =$this->uploadTicketS3($request->fileticket,$user->id);
                $ticket->registro_admin = $request->registro_admin;

                $user->tickets()->save($ticket);
                DB::commit();
                $json['success'] = 'Ticket guardado';
                return response($json,200);

        return response()->json($ganadores);
            }catch(Exception $e){
                DB::rollBack();
                return $e;
            }
        }
        $json['error'] = $validator->errors();
        return response($json,400);
    }

    public function sendPosibleGanador(Request $request){
        
        $usuario = User::where('id',$request->id_usuario)->first();
        $usuario->posible_ganador = 1;

        $usercontact['correo'] = $usuario['correo'];
        
        $usercontact['nombre'] = '';
        Mail::send('auth.email.posible_ganador_email' ,$usercontact, function ($contact) use ($usercontact) {
            $contact->from('privacidad@makken.com.mx', 'Total Tech');
            $contact->to($usercontact['correo'], 'Total Tech | Felicidades')->subject('Haz resultado posible ganador de la promoción "Tú también puedes con todo ¡Compra y gana! con Total Tech.');
        });

        if($usuario->save()){
            $json['success'] = 'success_posible_ganador';
            return response()->json($json);
        }
        $json['error'] = 'error_posible_ganador';
        return response()->json($json);
    }

    public function setGanadorUser(Request $request){
        $ganador = new Ganador();
        $ganador->id_usuario = $request->id_usuario;
        $ganador->id_premio = 1;
        $ganador->id_semana = intval($request->id_semana);
        $ganador->dia = $request->dia;
        $ganador->num_tickets = $request->num_tickets;
        $ganador->monto_total = $request->monto_total;

        $usuario = User::where('id',$request->id_usuario)->first();
        $usuario->posible_ganador = 0;
        $usuario->save();

        if($ganador->save() && $usuario->save()){
            $json['success'] = 'success_ganador_user';
            return response($json, 200);
        }
        $json['error'] = 'error_ganador_user';
        return response($json,400);
    }

    // public function setGanadorTicket(Request $request){
    //     $ganador = new Ganador();
    //     $ganador->id_usuario = $request->id_usuario;
    //     $ganador->id_ticket = $request->id_ticket;
    //     $ganador->id_semana = intval($request->id_semana);
    //     $ganador->id_premio = 1;
    //     $ticket = Ticket::where('id_ticket',$ganador->id_ticket)->first();
    //     if($ganador->save()){
    //         $json['success'] = 'success_ganador';
    //         $json['ticket'] = $ticket->no_ticket;
    //         return response($json, 200);
    //     }
    //     $json['error'] = 'error_ganador';
    //     return response($json,400);
    // }

    public function editEstablecimientos(Request $request){
        $establecimiento = Establecimiento::where('id_establecimiento',$request->id_establecimiento)->first();

        $establecimiento->nombre = $request->nombre;

        if($establecimiento->save()){
            $json['success'] = 'success_establecimiento';
            return response()->json($json);
        }
        $json['error'] = 'error_establecimiento';
        return response()->json($json);

    }
    public function addEstablecimiento(Request $request){
        $establecimiento = new Establecimiento();
        $establecimiento->nombre = $request->nombre;
        if($establecimiento->save()){
            $json['success'] = 'success_establecimiento';
            return response()->json($json);
        }
        $json['error'] = 'error_establecimiento';
        return response()->json($json);
    }
    public function editTexto(Request $request){

        $id_texto = $request->id_texto;

        $texto = Texto::where('id_texto',$id_texto)->first();

        $texto->contenido = $request->contenido;

        if($texto->save()){
            $json['success'] = 'success_texto';
            return response()->json($json);
        }

        $json['error'] = 'error_texto';
        return response()->json($json);

    }

    //METHOD GET
    public function getAllUsers(){
        $users = User::leftjoin('tickets', 'tickets.id_usuario', '=', 'users.id')
                        ->select('users.*', DB::raw("SUM(tickets.monto) as monto_total"), DB::raw("COUNT(tickets.id_ticket) AS num_tickets"))
                        ->groupBy('users.id')
                        ->get();
        return response()->json($users);
    }

    public function getOneUser($id){
        $user = User::getUser($id);

        return response()->json($user);
    }

    public function getAllTickets(){
        $disk = Storage::disk('s3');

        $tickets = Ticket::GetAllTickets();
        foreach($tickets as $ticket){
            Storage::setVisibility($ticket->url,'public');
            $ticket->url = $disk->url($ticket->url);
        }

        return response()->json($tickets);
    }

    public function getAllTicketsUsuarios(){
        $ticketsUsers = User::join('tickets', 'tickets.id_usuario', '=', 'users.id')
                        ->select('users.*', DB::raw("SUM(tickets.monto) as monto_total"), DB::raw("COUNT(tickets.id_ticket) AS num_tickets"), DB::raw('DATE_FORMAT(tickets.created_at, "%d-%c-%Y") as fecha_ganador') )
                        ->groupBy('users.id', DB::raw('CAST(tickets.created_at AS DATE)'))
                        ->get();
        return response()->json($ticketsUsers);
    }

    public function getAllGanadores(){
        $ganadores = Ganador::getAllGanadores();

        return response()->json($ganadores);

    }

    public function removeTicket(Request $request){
        $id_ticket = $request->id_ticket;

        $ticket = Ticket::where('id_ticket','=',$id_ticket)->first();

        if($ticket->delete()){

            return response()->json([
                'error'=>false,
                'message'=>'El ticket se ha eliminado.'
            ],200);

        }

        return response()->json([
            'error'=>true,
            'message'=>'El ticket no se ha eliminado.'
        ],400);


    }

    public function updateMontoTicket(Request $request){
        $id_ticket = $request->id;
        $ticket = Ticket::where('id_ticket',$id_ticket)->first();
        $ticket->monto = intval($request->nuevo_monto);

        if($ticket->save()){
            return response()->json([
                'error'=>false,
                'message'=>'El monto se ha actualizado.'
            ]);
        }
        return response()->json([
            'error'=>true,
            'message'=>'El monto no se ha actualizado.'
        ]);
    }

    public function updateFechaTicket(Request $request){
        $id_ticket = $request->id;
        $ticket = Ticket::where('id_ticket',$id_ticket)->first();
        $formato_fecha = Carbon::parse($request->nueva_fecha);
        $ticket->created_at = $formato_fecha;

        if($ticket->save()){
            return response()->json([
                'error'=>false,
                'message'=>'La fecha se ha actualizado con éxito.'
            ]);
        }
        return response()->json([
            'error'=>true,
            'message'=>'La fecha no se ha actualizado.'
        ]);
    }

    public function dashboard(){
        $users = count(DB::table('users')->where('isAdmin','!=',1)->get());
        // count(User::where('isAdmin','!=',1));
        $tickets = count(Ticket::all());
        $ganadores = count(Ganador::all());
        $montos_top = DB::table('tickets')
                        ->join('establecimiento','tickets.id_establecimiento','=','establecimiento.id_establecimiento')
                        ->select('tickets.*', 'establecimiento.nombre', 'establecimiento.url')
                        ->orderBy('monto','desc')
                        ->take(8)->get();
        $establecimientos_top = DB::table('tickets')
                                ->join('establecimiento','tickets.id_establecimiento','=','establecimiento.id_establecimiento')
                                ->select('establecimiento.*', DB::raw('count(*) as total'))
                                ->groupBy('id_establecimiento')
                                ->orderBy('total','desc')
                                ->take(5)->get();
        $registros_tickets_whatsapp = count(DB::table('tickets')->where('registro_admin','=',1)->get());
        $registros_tickets_web = count(DB::table('tickets')->where('registro_admin','=',0)->get());
        $registros_users_whatsapp = count(DB::table('users')->where('registro_admin','=',1)->where('isAdmin','!=',1)->get());
        $registros_users_web = count(DB::table('users')->where('registro_admin','=',0)->where('isAdmin','!=',1)->get());
        
        return response()->json([
            'error'=>false,
            'message'=>'Successful get data.',
            'data'=>[
                'users'=>$users,
                'tickets'=>$tickets,
                'ganadores'=>$ganadores,
                'tickets_whatsapp'=>$registros_tickets_whatsapp,
                'tickets_web'=>$registros_tickets_web,
                'users_whatsapp'=>$registros_users_whatsapp,
                'users_web'=>$registros_users_web,
                'montos_top'=>$montos_top,
                'establecimientos_top'=>$establecimientos_top
            ]
        ]);
    }

}
