<?php

Route::get('/', 'WelcomeController@index');

//Auth
Route::post('/login','Auth\LoginController@login');
Route::post('/registro','Auth\RegisterController@registroUser');
Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();


//Vistas
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ticket', 'HomeController@addNewTicket');
//Reset Password
Route::post('/forgot', 'Auth\ForgotPasswordController@forgot');
Route::get('/reset/{token}', 'Auth\ResetPasswordController@reset_view')->name('resetPwd');
Route::post('/resetpassword', 'Auth\ResetPasswordController@reset');
//Funcionalidades
Route::get('/api/v1/cp/{cp}','WelcomeController@getCP');
Route::get('/api/v1/establecimientos','ApiController@getEstablecimientos');
Route::get('/api/v1/users','AdminController@getAllUsers');
Route::get('/api/v1/users/{id}', 'AdminController@getOneUser');
Route::get('/api/v1/users/establecimiento/{id}', 'AdminController@getAPIUsersByEstablecimiento')->name('usersByEstablecimiento');
Route::get('/api/v1/tickets', 'AdminController@getAllTickets');
Route::get('/api/v1/ticketsUsuarios', 'AdminController@getAllTicketsUsuarios');
Route::get('/api/v1/ganadores', 'AdminController@getAllGanadores');
Route::get('/api/v1/establecimientos', 'WelcomeController@getEstablecimientos');
Route::get('/api/v1/textos', 'WelcomeController@getTextos');
Route::get('/api/v1/dashboard','AdminController@dashboard');

//Funcionalidades
Route::post('/ticket','UserController@creaTicketUser');
Route::post('/posibleganador','AdminController@sendPosibleGanador');
Route::post('/ganador','AdminController@setGanadorUser');
Route::post('/editEstablecimiento','AdminController@editEstablecimientos');
Route::post('/adminTicket','AdminController@adminRegisterTicket');
Route::post('/texto','AdminController@editTexto');
Route::post('/ticket/delete','AdminController@removeTicket');
Route::post('/ticket/monto','AdminController@updateMontoTicket');
Route::post('/ticket/fecha','AdminController@updateFechaTicket');

// Administrador
Route::get('/admin', 'WelcomeController@loginAdmin');

Route::get('/admin/dashboard', 'AdminController@getDashboard');
Route::get('/admin/usuarios/registrados', 'AdminController@usuariosRegistrados');
Route::get('/admin/usuarios/ganadores', 'AdminController@usuariosGanadores');
Route::get('/admin/usuarios/detalle/{id}', 'AdminController@usuarioDetalle');
Route::get('/admin/usuarios/establecimientos/{id}', 'AdminController@getUsersByEstablecimiento');
Route::get('/admin/usuarios/nuevo', 'AdminController@nuevoUsuario');
Route::get('/admin/tickets/registrados', 'AdminController@ticketsRegistrados');
Route::get('/admin/tickets/nuevo/{user_registrado?}', 'AdminController@nuevoTicket')->name("nuevoTicket");
Route::get('/admin/establecimientos', 'AdminController@establecimientos');
Route::get('/admin/establecimientos/nuevo', 'AdminController@nuevoEstablecimiento');
Route::get('/admin/establecimientos/editar', 'AdminController@editarEstablecimiento');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
