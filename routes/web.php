<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jajanan;

Route::get('/home', function () {
    return view('welcome');
});

use App\Http\Controllers\JajananController;

Route::get('/', [JajananController::class, 'home'])
    ->name('home');

Route::get('/jajanan', [JajananController::class, 'index'])
    ->name('jajanan.index');

Route::get('/jajanan/{id}', [JajananController::class, 'show'])
    ->whereNumber('id')
    ->name('jajanan.show');
