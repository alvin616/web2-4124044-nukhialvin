<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/perkenalan', function () {
    return '
        <h1>Nama Saya Nukhi Alvin R</h1>
        <p>NIM: 4124044 | Program Studi: Sistem Informasi</p>
    ';
});
Route::get('/husain', function () {
    return '
        <h1>Nama Saya Husain Aziz Al Rosyid</h1>
        <p>NIM: 4124031 | Program Studi: Sistem Informasi</p>
    ';
});
