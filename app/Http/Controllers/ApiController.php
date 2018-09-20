<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Establecimiento;
use App\CodigosPostales;

class ApiController extends Controller
{
    public function getCP($cp){
        $datosCP = CodigosPostales::where('CodigoPostal','=',$cp)->first();

        if(!$datosCP){
            $datosCP['error'] = 'Este código no es válido o no existe';
            return response($datosCP,400);
        }
        return response('prueba',200);

    }

    public function getEstablecimientos(){
        $establecimientos = Establecimiento::all();

        return response($establecimientos,200);
    }
}
