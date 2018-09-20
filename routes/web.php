<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index');

//Auth
Route::post('/login','Auth\LoginController@login');
Route::post('/registro','Auth\RegisterController@registroUser');
Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();


//Vistas
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ticket', 'HomeController@addNewTicket');

//Funcionalidades
Route::get('/api/v1/cp/{cp}','WelcomeController@getCP');
Route::get('/api/v1/establecimientos','ApiController@getEstablecimientos');
Route::get('/api/v1/users','AdminController@getAllUsers');
Route::get('/api/v1/users/{id}', 'AdminController@getOneUser');
Route::get('/api/v1/tickets', 'AdminController@getAllTickets');
Route::get('/api/v1/ganadores', 'AdminController@getAllGanadores');
Route::get('/api/v1/establecimientos', 'WelcomeController@getEstablecimientos');
Route::get('/api/v1/textos', 'WelcomeController@getTextos');


//Funcionalidades
Route::post('/ticket','UserController@creaTicketUser');
Route::post('/ganador','AdminController@setGanadorTicket');
Route::post('/editEstablecimiento','AdminController@editEstablecimientos');
Route::post('/adminTicket','AdminController@adminRegisterTicket');
Route::post('/texto','AdminController@editTexto');

// Administrador
Route::get('/admin', 'WelcomeController@loginAdmin');

Route::get('/admin/usuarios/registrados', 'AdminController@usuariosRegistrados');
Route::get('/admin/usuarios/ganadores', 'AdminController@usuariosGanadores');
Route::get('/admin/usuarios/detalle/{id}', 'AdminController@usuarioDetalle');
Route::get('/admin/tickets/registrados', 'AdminController@ticketsRegistrados');
Route::get('/admin/tickets/nuevo', 'AdminController@nuevoTicket');
Route::get('/admin/establecimientos', 'AdminController@establecimientos');
Route::get('/admin/establecimientos/nuevo', 'AdminController@nuevoEstablecimiento');
Route::get('/admin/establecimientos/editar', 'AdminController@editarEstablecimiento');
