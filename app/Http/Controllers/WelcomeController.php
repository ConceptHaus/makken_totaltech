<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ganador;

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
