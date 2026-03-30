<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

use App\Http\Controllers\Lat1Controller;

Route::get('/lat1', [Lat1Controller::class, 'index']);

Route::get('/lat1/m2', 'App\Http\Controllers\Lat1Controller@method2');