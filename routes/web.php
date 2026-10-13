<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JajananController;

Route::get('/home', [JajananController::class, 'home'])
    ->name('home');

Route::get('/katalog', [JajananController::class, 'index'])
    ->name('jajanan.index');

Route::get('/jajanan/{id}', [JajananController::class, 'show'])
    ->whereNumber('id')
    ->name('jajanan.show');

Route::get('/kontak', [JajananController::class, 'kontak'])
    ->name('kontak');    
