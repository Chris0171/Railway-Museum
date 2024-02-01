<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/ticketsSale', function () {
    return view('ticketsSale');
});
