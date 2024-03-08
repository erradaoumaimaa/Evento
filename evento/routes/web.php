<?php

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
})->name('home');

Route::get('register', [RegisterController::class, 'index'])->name('register');
// Route::post('register/candidat', [RegisterController::class, 'storeCandidat'])->name('register.candidat');
// Route::post('register/company', [RegisterController::class, 'storeCompany'])->name('register.company');

// Route::get('login', [SessionController::class, 'index'])->name('login');
// Route::post('login', [SessionController::class, 'store'])->name('login.store');
// Route::get('logout', [SessionController::class, 'destroy'])->name('logout');