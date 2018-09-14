<?php

namespace App\Http\Controllers;

use App\User;
use App\Ticket;


use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use App\Http\Controllers\Controller;
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

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __cunstructu(){
        $this->middleware('auth')->except('logout');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //Validador de registro de tickets

    protected function validadorTickets(array $data){
        return Validator::make($data, [
            //Validación de datos de tickets
            
            'no_ticket'=>'required|string',
            'monto' => 'required | number',
            'id_estableciento'=>'required|number',
            'fileticket'=>'required|image',

        ]);
    }
    public function uploadTicketS3($file,$user){
        //Sube tickets a bucket de Amazon
        $disk = Storage::disk('s3');
        $path = $file->store('users/'.$user.'/tickets','s3');
        

    }
    public function creaTicketUser(Request $request){
        //Guarda registro de ticket
        $user = auth()->user();
        $validador = $this->validadorTickets($request->all());
        $json['error'] = $validador->errors();

        if($validador->passes()){
            
            DB::beginTransaction();
            try{
                $ticket = new Ticket();
                $ticket->id_usuario = $user->id_usuario;
                $ticket->no_ticket = $request->no_ticket;
                $ticket->monto = $request->monto;
                $ticket->id_establecimiento = $request->id_establecimiento;
                //Sube archivo
                $this->uploadTicketS3($request->fileticket,$user->id_usuario);
                //{{ Falta guardar url don't forget. }}

                $user->ticket()->save($ticket);
                DB::commit();
                $json['success'] = 'Ticket guardado';

                return response()->json($json);

            DB::commit();
            }catch(Exception $e){
                DB::rollBack();
                return $e;
            }
        }

        return response()->json($json);

    }
}
