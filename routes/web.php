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
    return view('welcome');
});


Route::get('/home', [\App\Http\Controllers\HomeController::class , 'index'])->name('home');
Route::get('/languages', [\App\Http\Controllers\HomeController::class , 'languages'])->name('languages');
Route::get('/contact', [\App\Http\Controllers\ContactController::class , 'index']);
Route::post('/contact', [\App\Http\Controllers\ContactController::class , 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
