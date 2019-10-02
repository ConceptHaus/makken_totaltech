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
    public function __construct(){
        $this->middleware('auth')->except('logout');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //Validador de registro de tickets

    public function validadorTickets(array $data){
        return Validator::make($data, [
            //Validación de datos de tickets

            'no_ticket'=>'required|string|unique:tickets,no_ticket',
            'monto' => 'required|numeric',
            'id_establecimiento'=>'required|numeric',
            'fileticket'=>'required|file|mimes:pdf,png,jpeg',

        ]);
    }
    public function uploadTicketS3($file,$user){
        //Sube tickets a bucket de Amazon
        $disk = Storage::disk('s3');
        $path = $file->store('users/'.$user.'/tickets','s3');
        return $path;


    }
    public function creaTicketUser(Request $request){
        //Guarda registro de ticket
        $user = auth()->user();
        $input = $request->all();
        $input['monto'] = str_replace(',', '', $request->monto);
        $validador = $this->validadorTickets($input);
        if($validador->passes()){
            DB::beginTransaction();
            try{
                $ticket = new Ticket();
                $ticket->id_usuario = $user->id;
                $ticket->no_ticket = $request->no_ticket;
                $ticket->monto = $input['monto'];
                $ticket->id_establecimiento = $request->id_establecimiento;
                $ticket->otro_establecimiento = $request->otro_establecimiento;
                $ticket->registro_admin = $request->registro_admin;
                $ticket->url = $this->uploadTicketS3($request->fileticket,$user->id);;
                //Sube archivo
                //{{ Falta guardar url don't forget. }}

                $user->tickets()->save($ticket);
                DB::commit();
                $json['success'] = 'Ticket guardado';

                return response($json,200);
            }catch(Exception $e){
                DB::rollBack();
                return $e;
            }
        }
        $json['error'] = $validador->errors();
        return response($json,400);

    }


}
