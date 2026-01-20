<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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

// Route untuk halaman login (guest)
Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/home', fn () => view('pages.dashboard'))->name('home');
    Route::get('/dashboard', fn () => view('pages.dashboard'))->name('dashboard');

    Route::resource('user', UserController::class);
    Route::resource('product', ProductController::class);
    Route::resource('order', OrderController::class);

    Route::get('/profile', fn () => view('pages.profile'))->name('profile');
    Route::put('/profile', [UserController::class, 'updateProfile'])->name('profile.update');

    Route::get('/activities', fn () => view('pages.activities'))->name('activities');
    Route::get('/settings', fn () => view('pages.settings'))->name('settings');

    
});

