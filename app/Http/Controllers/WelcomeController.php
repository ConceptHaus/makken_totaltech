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
use App\CodigosPostales;
Use DB;

class WelcomeController extends Controller
{

    /**
     * Show the application Welcome.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['ganadores'] = Ganador::getAllGanadores();
        return view('welcome', $data);
    }
    public function getEstablecimientos(){
        return DB::table('tickets')
                        ->join('establecimiento','tickets.id_establecimiento','=','establecimiento.id_establecimiento')
                        ->join('users','users.id','=','tickets.id_usuario')
                        //->select('tickets.monto', 'establecimiento.nombre')
                        ->select(DB::raw('sum(tickets.monto) as monto'),DB::raw('count(tickets.id_usuario) as usuarios'), 'establecimiento.nombre', 'establecimiento.id_establecimiento', 'establecimiento.url')
                        ->groupBy('tickets.id_establecimiento')
                        ->orderBy('monto','desc')
                        ->get();

        return response()->json($establecimientos);
    }

    public function getTextos(){
        $textos = Texto::all();

        return response()->json($textos);
    }
     public function getCP($cp){
        $datosCP = CodigosPostales::where('CodigoPostal','=',$cp)->first();

        if(!$datosCP){
            $datosCP['error'] = 'Este código no es válido o no existe';
            return response($datosCP,400);
        }
        return response($datosCP,200);

    }
}
