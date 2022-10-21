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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [App\Http\Controllers\FrontController::class, 'homePage'])->name('home');
Route::get('/about', [App\Http\Controllers\FrontController::class, 'aboutPage'])->name('about');
Route::get('/brand', [App\Http\Controllers\FrontController::class, 'brandPage'])->name('brand');
Route::get('/contact', [App\Http\Controllers\FrontController::class, 'contact'])->name('contact');

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
