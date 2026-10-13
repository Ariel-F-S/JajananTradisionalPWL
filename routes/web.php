<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jajanan;

Route::get('/home', function () {
    return view('welcome');
});