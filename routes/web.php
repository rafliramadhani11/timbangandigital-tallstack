<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('guest.login');
    Route::get('/register', 'register')->name('guest.register');

    Route::post('/register', 'store')->name('guest.store');
});
