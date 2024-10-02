<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Series;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [Series::class , 'index']);