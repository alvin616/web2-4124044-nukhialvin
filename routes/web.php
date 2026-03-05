<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nukhi', function () {
    return view('nukhi');
});
Route::get('/husain', function () {
    return view('husain');
});
