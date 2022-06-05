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
    Route::view('register', 'investor.register',['title' => 'Investor - Register'])->name('register');
    Route::view('login', 'investor.login', ['title' => 'Investor - Login'])->name('login');
    Route::view('email-confirmation', 'investor.email-confirmation', ['title' => 'Investor - Email Confirmation'])->name('email-confirmation');
    Route::view('password-reset-request', 'investor.password-reset-request', ['title' => 'Investor - Password Reset Request'])->name('password-reset-request');
    Route::view('password-reset-sent', 'investor.password-reset-sent', ['title' => 'Investor - Password Reset Request'])->name('password-reset-sent');
    Route::view('password-reset-form', 'investor.password-reset-form', ['title' => 'Investor - Password Reset'])->name('password-reset-form');
    Route::view('password-reset-success', 'investor.password-reset-success', ['title' => 'Investor - Password Reset'])->name('password-reset-success');
    Route::view('dashboard', 'investor.dashboard', ['title' => 'Investor - Dashboard'])->name('dashboard');
});

Auth::routes();
