<?php

use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StarController;
use App\Models\Star;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Route::resource('members',  MemberController::class)->only('index');
    Route::resource('stars',  StarController::class)->only('index');
});

Route::resource('members',  MemberController::class)->only('index');
Route::resource('stars',  StarController::class)->only('store');

//Route::get('/auth/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('login.google');

Route::get('/auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])
    ->name('login.google.callback');

require __DIR__.'/auth.php';
