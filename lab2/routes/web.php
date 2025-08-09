<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [BookController::class, 'index']);

Route::get('/create', [BookController::class, 'create']);
Route::post('/postCreate', [BookController::class, 'postAdd']);

Route::get('/update/{id}', [BookController::class, 'update']);
Route::post('/postUpdate', [BookController::class, 'postUpdate']);

Route::get('/delete/{id}', [BookController::class, 'delete']);

Route::get('/search', [BookController::class, 'search']);