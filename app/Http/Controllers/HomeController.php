<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Storage;

use App\CodigosPostales;
use App\Ticket;
use App\User;

class HomeController extends Controller
{
/**
* Create a new controller instance.
*
* @return void
*/
public function __construct()
{
$this->middleware('auth');
}

/**
* Show the application dashboard.
*
* @return \Illuminate\Http\Response
*/
public function index() {
    $disk = Storage::disk('s3');
    $user = auth()->user();
    $tickets['tickets'] = Ticket::GetAllTicketsFromUser($user->id);
    foreach ($tickets['tickets'] as $ticket){
    Storage::setVisibility($ticket->url,'public');
    $ticket->url = $disk->url($ticket->url);
    }
    if ($user) {
        $promo =  $user->id_promo;
        if ($promo == 2) return redirect()->route('totaltech.home');
        else return view('home', $tickets);
    } else {
        // No hay usuario autenticado
        echo 'No hay usuario autenticado.';
    }
   
}

public function indexTotaltech() {
    $disk = Storage::disk('s3');
    $user = auth()->user();
    $tickets['tickets'] = Ticket::GetAllTicketsFromUser($user->id);
    foreach ($tickets['tickets'] as $ticket){
        Storage::setVisibility($ticket->url,'public');
        $ticket->url = $disk->url($ticket->url);
    }
    if ($user) {
        $promo =  $user->id_promo;
        if ($promo == 2) return view('totaltech.home', $tickets);
        else return redirect()->route('home');
    } else {
        // No hay usuario autenticado
        echo 'No hay usuario autenticado.';
    }

}
public function addNewTicket() {
    $user = auth()->user();

    if ($user) {
        $promo =  $user->id_promo;
        if ($promo == 2) return redirect()->route('totaltech.ticket');
        else return view('add_ticket');
    } else {
        // No hay usuario autenticado
        echo 'No hay usuario autenticado.';
    }
        //return view('add_ticket');
}

public function addNewTicketTotaltech() {
    $user = auth()->user();
    if ($user) {
        $promo =  $user->id_promo;
        if ($promo == 2) return view('totaltech.add_ticket');
        else return redirect()->route('montack.ticket');
    } else {
        // No hay usuario autenticado
        echo 'No hay usuario autenticado.';
    }
}

}
