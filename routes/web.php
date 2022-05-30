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
})->name('dashboard');


Route::prefix('investor')->name('investor.')->group(function(){
    Route::view('register', 'investor.register')->name('register');
    Route::view('login', 'investor.login')->name('login');
    Route::view('email-confirmation', 'investor.email-confirmation')->name('email-confirmation');
});

Auth::routes();