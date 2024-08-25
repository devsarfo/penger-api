<?php

use App\Http\Controllers\Api\AccountController;
use App\Http\Controllers\Api\AccountTypeController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CurrencyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register')->name('api.auth.register');
    Route::post('/login', 'login')->name('api.auth.login');
    Route::post('/reset/otp', 'resetOtp')->name('api.auth.reset.otp');
    Route::post('/reset/password', 'resetPassword')->name('api.auth.reset.password');

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/otp', 'otp')->name('api.auth.otp');
        Route::post('/verify', 'verify')->name('api.auth.verify');
        Route::post('/logout', 'logout')->name('api.auth.logout');
    });
});

Route::middleware('auth:sanctum')->controller(CurrencyController::class)->group(function () {
    Route::get('/currency', 'index')->name('api.currency.index');
    Route::get('/currency/{id}', 'get')->name('api.currency.get');
});

Route::middleware('auth:sanctum')->controller(AccountTypeController::class)->group(function () {
    Route::get('/account-type', 'index')->name('api.account.type.index');
    Route::get('/account-type/{id}', 'get')->name('api.account.type.get');
});

Route::middleware('auth:sanctum')->controller(AccountController::class)->group(function () {
    Route::get('/account', 'index')->name('api.account.index');
    Route::get('/account/{id}', 'get')->name('api.account.get');
    Route::post('/account', 'store')->name('api.account.store');
    Route::patch('/account/{id}', 'update')->name('api.account.update');
    Route::delete('/account/{id}', 'delete')->name('api.account.delete');
});
