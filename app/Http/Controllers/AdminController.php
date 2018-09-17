<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Direccion;
use App\Premio;
use App\Ticket;
use App\Ganador;
use App\Establecimiento;
use App\Seccion;
use App\Texto;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('admin')->except('logout');
    }

    public function getAllUsers(){
        $users = User::getAllUsers();
        
        return response()->json($users);
    }

    public function getOneUser($id){
        $user = User::getUser($id);

        return response()->json($user);
    }

    public function getAllTickets(){
        $tickets = Ticket::GetAllTickets($query);

        return response()->json($tickets);
    }

    public function setGanadorTicket(){

    }

    public function getAllGanadores(){
        $ganadores = Ganador::getAllGanadores();

        return response()->json($ganadoes);

    }

    public function editEstablecimientos(Request $request){
        
    }

    public function getEstablecimientos(){
        $establecimientos = Establecimiento::all();

        return response()->json($establecimientos);
    }

    // El admin puede registrar 

    public function adminRegisterTicker(){

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

    public function getTextos(){
        $textos = Texto::all();

        return response()->json($textos);
    }
}
