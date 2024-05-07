<?php

use Illuminate\Support\Facades\Route;


//Root page
Route::get('/', function () {
    return view('welcome');
});

//Translate page
Route::get('/translate', function () {
    return view('translate');
});

//Quiz page
Route::get('/quiz', function () {
    return view('welcome');
});
