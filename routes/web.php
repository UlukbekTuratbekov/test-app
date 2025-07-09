<?php

use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/create', [PostController::class, 'create']);
Route::get('posts/update', [PostController::class, 'update']);
Route::get('posts/delete', [PostController::class, 'delete']);
Route::get('posts/first_or_create', [PostController::class, 'firstOrCreate']);
Route::get('posts/update_or_create', [PostController::class, 'updateOrCreate']);

Route::get('/main', [MainController::class, 'index']);
Route::get('/about', [AboutContoller::class, 'index']);
Route::get('/contacts', [ContactController::class, 'index']);
