<?php

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

Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/prueba', [App\Http\Controllers\HomeController::class, 'prueba'])->name('prueba');
Route::get('/blanco', [App\Http\Controllers\HomeController::class, 'blanco'])->name('blanco');

Route::resource('products', App\Http\Controllers\ProductController::class);


Route::resource('users', App\Http\Controllers\UsersController::class);
