<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboradController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Dashborad\indexController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/index', [indexController::class, 'index'])->name('indexadmin');
//setting
Route::group(['as'=>'dashborad.'],function(){
    Route::get('/settings', function () {
        return view('dashborad.settings');
    })->name('settings');
    
    Route::post('/update/{setting}', [SettingController::class, 'update'])->name('settingupdate');
    Route::get('/setting', function () {
        return view('dashborad.settings');
    })->name('setting');
    Route::get('/cat', [ CategoriesController::class, 'index'])->name('cat');

});
