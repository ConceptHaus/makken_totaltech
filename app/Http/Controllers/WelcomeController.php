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
        $user = auth()->user();
        $data['ganadores'] = Ganador::getAllGanadores();
        $idTipoPromoArray = [];

        foreach ($data['ganadores'] as $ganador) {
            $idTipoPromo = $ganador->user->id_promo;

            // Verifica si el id_tipo_promo no está en el arreglo para evitar duplicados
            if ($idTipoPromo == 1) {
                $idTipoPromoArray[] = $ganador;
            }
        }
        $data['ganadores'] = $idTipoPromoArray;
        if ($user) {
            $promo =  $user->id_promo;
            if ($promo == 2) return redirect()->route('indexTotaltech');
            else return view('welcome', $data);
        } else {
            return view('welcome', $data);
        }
        
       
    }

    public function indexHome() {
        $user = auth()->user();
        if ($user) {
            $data['ganadores'] = Ganador::getAllGanadores();
            $idTipoPromoArray = [];
    
            foreach ($data['ganadores'] as $ganador) {
                $idTipoPromo = $ganador->user->id_promo;
    
                // Verifica si el id_tipo_promo no está en el arreglo para evitar duplicados
                if ($idTipoPromo == 1) {
                    $idTipoPromoArray[] = $ganador;
                }
            }
            $data['ganadores'] = $idTipoPromoArray;
            $promo =  $user->id_promo;
            if ($promo == 2) return redirect()->route('indexTotaltech');
            else return view('welcome', $data);
        } else {
            return view('index');
        }
        
       
    }

    public function indexTotaltech() {
        $user = auth()->user();
        $data['ganadores'] = Ganador::getAllGanadores();
        $idTipoPromoArray = [];

        foreach ($data['ganadores'] as $ganador) {
            $idTipoPromo = $ganador->user->id_promo;

            // Verifica si el id_tipo_promo no está en el arreglo para evitar duplicados
            if ($idTipoPromo == 2) {
                $idTipoPromoArray[] = $ganador;
            }
        }
        $data['ganadores'] = $idTipoPromoArray;
      
        if ($user) {
            $promo =  $user->id_promo;
            if ($promo == 2) return view('welcomeTotaltech', $data);
            else return redirect()->route('indexTotal');
        } else {
            return view('welcomeTotaltech', $data);
        }
    }

    public function getEstablecimientos($id){
        $establecimientos = DB::table('establecimiento')
            ->where('establecimiento.id_promo', $id)
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
