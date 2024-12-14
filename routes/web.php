<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

// Route::get('/', function () {
//     return view('front.index');
// });
Route::get('/', [FrontController::class, 'index'])->name('index'); // Menggunakan method index di FrontController
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');

