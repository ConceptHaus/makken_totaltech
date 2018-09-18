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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login','Auth\LoginController@login');
Route::post('/registro','Auth\RegisterController@registroUser');
Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();


//Vistas
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ticket', 'HomeController@addNewTicket');

//Funcionalidades
Route::get('/api/v1/cp/{cp}','HomeController@getCP');

// Administrador

Route::get('/admin', 'WelcomeController@loginAdmin');

Route::get('/usuarios/registrados', 'AdminController@usuariosRegistrados');
Route::get('/usuarios/ganadores', 'AdminController@usuariosGanadores');
Route::get('/nuevo/ticket', 'AdminController@nuevoTicket');
Route::get('/tickets/registrados', 'AdminController@ticketsRegistrados');
Route::get('/establecimientos', 'AdminController@establecimientos');



