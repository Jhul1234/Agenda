<?php
Route::get('/', function () {
    return view('LoginUser');
});

Route::post('/registrar','LoginUsuarioController@RegistroCliente');
Route::post('/verificar','LoginUsuarioController@LoginUsuario');