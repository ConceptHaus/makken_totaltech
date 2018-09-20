<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Establecimiento;
use App\CodigosPostales;

class ApiController extends Controller
{
   

    public function getEstablecimientos(){
        $establecimientos = Establecimiento::all();

        return response($establecimientos,200);
    }
}
