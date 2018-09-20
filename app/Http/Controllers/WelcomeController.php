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
        $establecimientos = Establecimiento::all();

        return response()->json($establecimientos);
    }

    public function getTextos(){
        $textos = Texto::all();

        return response()->json($textos);
    }
}
