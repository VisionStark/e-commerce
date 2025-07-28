<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('frontend.index');
// });
Route:: get('/', [HomeController::class , 'index'])->name('home');
Route:: get('/about', [HomeController::class, 'about'])->name('about');
Route:: get('/shop', [HomeController::class, 'shop'])->name('shop');
Route:: get('/contact', [HomeController::class, 'contact'])->name('contact');
