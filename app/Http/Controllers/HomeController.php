<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CodigosPostales;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('home');
    }
    public function addNewTicket() {
        return view('add_ticket');
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
