<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [BlogController::class, 'home']);
Route::get('/blog/portofolio', [BlogController::class, 'portofolio']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
Route::get('/blog/dicoding', [BlogController::class, 'dicoding']);
Route::get('/blog/ats', [BlogController::class, 'ats']);
Route::get('/blog/webshop', [BlogController::class, 'webshop']);