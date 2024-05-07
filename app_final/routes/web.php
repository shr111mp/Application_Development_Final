<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/translate', function () {
    return view('translate');
});

Route::get('/quiz', function () {
    return view('welcome');
});
