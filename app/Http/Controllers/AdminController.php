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
use DB;
use Mail;
use Validator;

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
    public function usuariosRegistrados() {
        return view('admin/usuarios_registrados');
    }

    public function usuariosGanadores() {
        $data['semanas'] = Semanas::all();
        return view('admin/usuarios_ganadores',$data);
    }

    public function usuarioDetalle($id) {
        $data['user'] = User::getUser($id);
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

    public function setGanadorTicket(Request $request){
        $ganador = new Ganador();
        $ganador->id_usuario = $request->id_usuario;
        $ganador->id_ticket = $request->id_ticket;
        $ganador->id_semana = intval($request->id_semana);
        $ganador->id_premio = 1;
        $ticket = Ticket::where('id_ticket',$ganador->id_ticket)->first();
        if($ganador->save()){
            $json['success'] = 'success_ganador';
            $json['ticket'] = $ticket->no_ticket;
            return response($json, 200);
        }
        $json['error'] = 'error_ganador';
        return response($json,400);

    }

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
        $users = User::getAllUsers();
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

    public function getAllGanadores(){
        $ganadores = Ganador::getAllGanadores();

        return response()->json($ganadores);

    }


}
