<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;

use App\Http\Controllers\Investor\AuthController as InvestorAuthController;
use App\Http\Controllers\Investor\RegisterController as InvestorRegisterController;

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
    Route::get('login', [InvestorAuthController::class, 'index'])->name('login');
    Route::get('register', [InvestorRegisterController::class, 'index'])->name('register');
    Route::view('email-confirmation', 'investor.email-confirmation', ['title' => 'Investor - Email Confirmation'])->name('email-confirmation');
    Route::view('password-reset-request', 'investor.password-reset-request', ['title' => 'Investor - Password Reset Request'])->name('password-reset-request');
    Route::view('password-reset-sent', 'investor.password-reset-sent', ['title' => 'Investor - Password Reset Request'])->name('password-reset-sent');
    Route::view('password-reset-form', 'investor.password-reset-form', ['title' => 'Investor - Password Reset'])->name('password-reset-form');
    Route::view('password-reset-success', 'investor.password-reset-success', ['title' => 'Investor - Password Reset'])->name('password-reset-success');
    Route::view('dashboard', 'investor.dashboard', ['title' => 'Investor - Dashboard'])->name('dashboard');
});

Route::prefix('admin')->name('admin.')->group(function () {
    // Work in progress
});

Route::prefix('startup')->name('startup.')->group(function () {
    // Work in progress
});

Route::prefix('auth')->name('auth.')->group(function () {
    Route::post('register', [RegisterController::class, 'register'])->name('register');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('password-confirm', [ConfirmPasswordController::class, 'confirm'])->name('password-confirm');
    Route::post('password-email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password-email');
    Route::post('password-reset', [ResetPasswordController::class, 'reset'])->name('password-reset');
});

