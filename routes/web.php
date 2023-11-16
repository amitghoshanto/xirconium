<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('index', function () {
        return redirect()->route('home');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login', 'login');
    Route::get('logout', 'logout')->name('logout');
    Route::get('signup', 'signup')->name('signup');
    Route::post('signup', 'create');
    Route::get('forget-pass', 'forgotPassword')->name('forget-password');
    Route::post('forget-pass', 'forgotPasswordPost');
});
