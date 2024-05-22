<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Models\Referee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RefereesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
Route::get('/moncompte', function () {
    return view('moncompte');
})->middleware('auth')->name('moncompte');

// ? _____________Referees____________
Route::resource('referees', RefereesController::class);

// ? _____________Login____________
Route::middleware('guest')->group((function () {
    Route::get('/', [LoginController::class, 'show'])->name('login.show');
    Route::get('/signup', [LoginController::class, 'signup'])->name('login.signup');



    // Route::get('/resetpassword',  [ResetPasswordController::class])
    // ->name('reset');
}
));
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/login', [LoginController::class, 'login'])->name('login');
