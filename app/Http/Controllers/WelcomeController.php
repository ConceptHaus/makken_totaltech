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
}
