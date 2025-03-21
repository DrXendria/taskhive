<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . ' !';
});
