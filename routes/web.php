<?php

use App\Http\Controllers\TicketsController;
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
route::get('/login', function () {
    return view('login');
});
route::post('/ticketsSale/buy', [TicketsController::class, 'tickets_save']);

Route::fallback(function () {
    return view('error404');
});