<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CropImageController;

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
    Route::get('/', 'index')->name('home')->middleware('guest');
    Route::get('index', function () {
        return redirect()->route('home');
    });

    Route::get('about-us', 'aboutUs')->name('AboutUs');
    Route::get('privacy-policy', 'privacyPolicy')->name('PrivacyPolicy');
    Route::get('terms-and-conditions', 'termsAndConditions')->name('TOS');
    Route::get('refund-policy', 'refundPolicy')->name('RefundPolicy');
    Route::get('contact-us', 'contactUs')->name('ContactUs');
    Route::get('test', 'test')->name('test');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'index')->name('login')->middleware('guest');
    Route::post('login', 'login')->middleware('guest');
    Route::get('logout', 'logout')->name('logout')->middleware('auth');
    Route::get('signup', 'signup')->name('signup')->middleware('guest');
    Route::post('signup', 'create')->middleware('guest');

    Route::get('verify-signup', 'verifySignup')->name('verify-signup')->middleware('guest');
    Route::post('verify-signup', 'codeVerification')->middleware('guest');
    Route::get('set-password', 'setPassword')->name('set-password')->middleware('guest');
    Route::post('set-password', 'setPasswordPost')->middleware('guest');

    Route::get('forget-pass', 'forgotPassword')->name('forget-password')->middleware('guest');
    Route::post('forget-pass', 'forgotPasswordPost')->middleware('guest');
    Route::get('verify-ownership', 'verifyOwnership')->name('verify-ownership')->middleware('guest');
    Route::post('verify-ownership', 'verifyOwnershipPost')->middleware('guest');
    Route::get('change-password', 'changePassword')->name('change-password')->middleware('guest');
    Route::post('change-password', 'changePasswordPost')->middleware('guest');
});

Route::controller(UserController::class)->group(function () {
    Route::get('profile', 'index')->name('profile')->middleware('auth');
    Route::post('profile', 'edit')->middleware('auth');
});


Route::get('cropimage', [CropImageController::class, 'index']);
Route::post('crop-image-upload-ajax', [CropImageController::class, 'cropImageUploadAjax']);
