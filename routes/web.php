<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordResetController;
use Illuminate\Auth\Events\PasswordReset;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login2', [LoginController::class, 'index'])->name('login2');
Route::get('/register2', [RegisterController::class, 'index'])->name('register2');
Route::get('/reset2', [PasswordResetController::class, 'index'])->name('reset2');
// Route::get('/reset3', [PasswordResetController::class, 'showResetForm'])->name('reset3');


