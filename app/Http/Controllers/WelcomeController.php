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

    public function indexTargeta() {
        $dataGanadores = json_decode(file_get_contents("json/targetaGanadores.json"),true);
        $data['ganadores'] = $dataGanadores;
        return view('welcomeTarjeta', $data);
    }

    public function getEstablecimientos(){
        $establecimientos = DB::table('establecimiento')
            ->leftJoin('tickets', 'establecimiento.id_establecimiento', '=', 'tickets.id_establecimiento')
            ->leftJoin('users', function($join){
                $join->on('users.id', '=', 'tickets.id_usuario');
            })
            ->select(DB::raw('sum(tickets.monto) as monto'),DB::raw('count(users.id) as usuarios'), 'establecimiento.nombre', 'establecimiento.id_establecimiento', 'establecimiento.url')
            ->groupBy('establecimiento.id_establecimiento')
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
