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

    }

    public function getOneUser($id){

    }

    public function getAllTickets(){

    }

    public function setGanadorTicket(){

    }

    public function getAllGanadores(){

    }

    public function editEstablecimientos(){

    }

    public function getEstablecimientos(){

    }

    // El admin puede registrar 

    public function adminRegisterTicker(){

    }

    public function editTexto(){
        
    }
}
