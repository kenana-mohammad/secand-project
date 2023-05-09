<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboradController;
use App\Http\Controllers\LoginController;

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
Route::get('/', function () {
    return view('welcome');
})->name('welcomeuser');
/*Route::get('/admin', function () {
    return view('dashborad.index');
})->name('admin');*/
Route::get('/user', function () {
    return view('user');
})->name('user');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashb', [App\Http\Controllers\dashboradController::class, 'index2'])->name('dash');
/*Route::get('/red', [App\Http\Controllers\LoginController::class, 'index2'])->name('red');*/
