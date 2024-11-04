<?php

use Illuminate\Support\Facades\Route;
use app\Http\DanceController;
use LDAP\Result;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mariela', function () {
    return view('miprimeravista');
});
Route::get('/micomponente', function () {
    return view('components');
});
Route::get('/ballet', function () {
    return view('ballet');
});
Route::get('/folklorico', function () {
    return view('folklorico');
});
Route::get('/regional', function () {
    return view('regional');
});
Route::get('/contemporanea', function () {
    return view('contemporanea');
});

Route::get('/bimbo', function () {
    return view('bimbo');
});