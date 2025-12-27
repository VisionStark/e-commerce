<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\Backend\EcommerceController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ShopController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\AdminController;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('frontend.index');
// });
Route:: get('/', [HomeController::class , 'index'])->name('home');
Route:: get('/about', [HomeController::class, 'about'])->name('about');
Route:: get('/shop1', [HomeController::class, 'shop'])->name('shop1');
Route:: get('/contact1', [HomeController::class, 'contact'])->name('contact1');
Route:: get('/admin', [AdminController::class, 'home'])->name('admin');
Route:: post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route:: get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/product_detail/{id}', [HomeController::class, 'product_detail'])->name('product_detail');




Route::resource('/ecommerce', EcommerceController::class);
Route::resource('/about1', AboutController::class);
Route::resource('/shop', ShopController::class);
Route::resource('/team', TeamController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
