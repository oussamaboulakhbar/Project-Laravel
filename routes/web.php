<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\ForgotPasswordController;
use App\Models\Referee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\RefereesController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;


// ? _____________Referees____________
Route::resource('referees', RefereesController::class);

// ? _____________Matches____________
Route::resource('matches', MatchesController::class);
Route::view('/matches-view', 'matches')->name('matches.view');
// Route::get('/download/{file}', [MatchesController::class, 'download'])->name('matches.download');




// ? _____________Login____________
Route::middleware('guest')->group((function () {
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::get('/signup', [RegisterController::class, 'signup'])->name('signup');
}
));
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/signup', [RegisterController::class, 'create'])->name('signup.create');
// ? _____________APP____________
Route::middleware('auth')->group((function () {
    Route::get('/home', [ChartController::class, 'matchChart'])->name('home');
}
));
Route::get('/download/{data}',function($data){
    // affichage
    return response()->download('storage/reports/'.$data,disposition:'inline');
    // download
    // return response()->download('storage/imagesPrfl/kaka.jpg');
});
