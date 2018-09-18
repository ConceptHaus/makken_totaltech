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

//Auth
Route::post('/login','Auth\LoginController@login');
Route::post('/registro','Auth\RegisterController@registroUser');
Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();


//Vistas
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ticket', 'HomeController@addNewTicket');

//Catálogo
Route::get('/api/v1/cp/{cp}','Apicontroller@getCP');
Route::get('/api/v1/establecimientos','ApiController@getEstablecimientos');

//Funcionalidades
Route::post('/ticket','UserController@creaTicketUser');