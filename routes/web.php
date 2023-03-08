<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes();

// Index Page Route
Route::get('/', function () {
    return view('index');
});

// About Page Route
Route::get('/about', [AboutController::class, 'index']);

// Product Page Route
Route::prefix('product')->group(function(){
    Route::get('/product-1', [ProductController::class, 'index']);
    Route::get('/product-2', [ProductController::class, 'index']);
});

// News Page Route
Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{id}', [NewsController::class, 'newsparam']);

//Contact Page Route
Route::resource('/contact',ContactController::class);

// Program Page Route
Route::prefix('program')->group(function(){
    Route::get('/program-1', [ProgramController::class, 'index']);
    Route::get('/program-2', [ProgramController::class, 'index']);
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
