<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrgonizerController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
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

Route::get('/signup', [RegisterController::class, 'index'])->name('register');
Route::post('/signup/{role}', [RegisterController::class, 'store'])->name('register.store');

Route::post('/login', [SessionController::class, 'store'])->name('login.store');
Route::get('logout', [SessionController::class, 'destroy'])->name('logout');



Route::middleware('can:admin')->group(function() {
    Route::get('admin', [AdminController::class, 'index'])->name('admin');

});

Route::middleware('can:orgonizer')->group(function() {
    Route::get('organizers', [OrgonizerController::class, 'index'])->name('organizers.index');

});

Route::middleware('can:user')->group(function() {
    Route::get('users', [UserController::class, 'index'])->name('users.index');
   
});
