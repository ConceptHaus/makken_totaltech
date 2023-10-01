<?php

Route::get('/', function () {return redirect('/montack');});
Route::get('/montack', 'WelcomeController@index')->name('indexTotal');
Route::get('/totaltech', 'WelcomeController@indexTotaltech')->name('indexTotaltech');




//Auth
Route::get('/login', function () {return redirect('/montack/login');});
Route::get('/montack/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login');

Route::get('/totaltech/login', 'Auth\LoginController@showLoginFormTotaltech')->name('totaltech.login');

Route::get('/register', function () {return redirect('/montack/register');});
Route::get('/montack/register', 'Auth\RegisterController@showRegisterForm')->name('montack.register');
Route::post('/registro','Auth\RegisterController@registroUser')->name('registro');
Route::get('/logout', function ($id) {
    return redirect("/logout/1");
});
Route::get('/logout/{id}', 'Auth\LoginController@logout');
Route::get('/totaltech/logout/{id}', 'Auth\LoginController@logout');

Route::get('/totaltech/register', 'Auth\RegisterController@showRegisterFormTotaltech')->name('totaltech.register');

Route::get('/password/reset', function () {return redirect('/montack/password/reset');});
Route::get('/montack/password/reset', 'Auth\ResetPasswordController@resetPass')->name('password.request');

Route::get('/totaltech/password/reset', 'Auth\ResetPasswordController@resetPassTotaltech')->name('totaltech.password.request');

Auth::routes();


//Vistas
Route::get('/home', function () {return redirect('/montack/home');});
Route::get('/montack/home', 'HomeController@index')->name('home');
Route::get('/totaltech/home', 'HomeController@indexTotaltech')->name('totaltech.home');
Route::get('/ticket', function () {return redirect('/montack/ticket');});
Route::get('/montack/ticket', 'HomeController@addNewTicket')->name('montack.ticket');
Route::get('/totaltech/ticket', 'HomeController@addNewTicketTotaltech')->name('totaltech.ticket');
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

Route::get('/montack/api/v1/establecimientos/{id}', function ($id) {
    return redirect("/api/v1/establecimientos/{$id}");
});
Route::get('/totaltech/api/v1/establecimientos/{id}', function ($id) {
    return redirect("/api/v1/establecimientos/{$id}");
});
Route::get('/api/v1/establecimientos/{id}', 'WelcomeController@getEstablecimientos');
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
Route::get('/api/v1/reporte','AdminController@reporte');
Auth::routes();


