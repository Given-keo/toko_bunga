<?php

use App\Http\Controllers\Collection;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('layanan');
});

Route::get('/portfolio', [Collection::class, 'index']);

Route::get('/pricing', [PackageController::class, 'index']);


Route::get('/contact', function () {
    return view('contact');
});
