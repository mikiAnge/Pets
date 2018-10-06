<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', function () {
    return view('users');
});

//crear nueva ruta
/*
Route::get('/usuarios', function () {
    return 'Lista de usuarios';
});

Route::get('/usuario/{id}', function ($id) {
    return 'Este es el id del usuario '.$id;
})->where('id', '[0-9]+');

Route::get('/user/{name?}', function ($name = 'Invitado') {
    return 'Este es el usuario con el nombre '.$name;
})->where('name', '[A-Za-z]+');
*/
//Rutas creadas por php artisan make:auth que crea automaticamente la ruta de autenticacion
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');