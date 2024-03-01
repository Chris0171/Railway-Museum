<?php

use App\Http\Controllers\TicketsController;
use App\Http\Controllers\ticketOfficeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/ticketsSale', function () {
    return view('ticketsSale');
});

route::get('/ticketOffice', function () {
    return view('ticketOffice');
})->name("ticketOffice");

route::post('/ticketsSale/buy', [TicketsController::class, 'tickets_save']);

route::get('/login', function () {
    return view('login');
});

route::post('/login/check', [ticketOfficeController::class, 'checkPass']);

route::get('/login/{error}', function ($error) {
    return view('login', ['error' => $error]);
})->name('loginError');

Route::get('/{success}', function ($success) {
    return view('index', ['success' => $success]);
})->name('buySuccess');

Route::fallback(function () {
    return view('error404');
});