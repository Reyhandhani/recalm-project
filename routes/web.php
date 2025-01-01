<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserProfileController;

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
    return view('auth.login');

});

Route::post('/store', [NoteController::class, 'store'])->name('store');
Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('profile', ProfileController::class)->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/notes', [App\Http\Controllers\HomeController::class, 'notes'])->name('notes');
Route::post('/store', [App\Http\Controllers\HomeController::class, 'store']);

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::post('/profile/update', [UserProfileController::class, 'update'])->name('profile.update');
Route::post('/profile/update', [UserProfileController::class, 'update'])->middleware('auth')->name('profile.update');
