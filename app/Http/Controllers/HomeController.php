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
return view('home', $tickets);
}
public function addNewTicket() {
return view('add_ticket');
}

}
