<?php

use App\Http\Controllers\MyPlaceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
   return view('dashboard');
});

Route::get('/my_place', [MyPlaceController::class, 'index']);

Route::get('/1', function () {
    return 'this is first page';
});
