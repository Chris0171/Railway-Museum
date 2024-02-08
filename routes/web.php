<?php

use App\Http\Controllers\ticketsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/ticketsSale', function () {
    return view('ticketsSale');
});
route::get('/ticketOffice', function () {
    return view('ticketOffice');
});
route::post('/ticketsSale/buy', [ticketsController::class, 'tickets_save']);