<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;

// ...

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])-> name('homepage');
Route::get('detail/{car:slug}', [\App\Http\Controllers\HomeController::class, 'detail'])-> name('detail');
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'contact'])-> name('contact');
Route::post('contact', [\App\Http\Controllers\HomeController::class, 'contactStore'])-> name('contact.store');


Route::group(['middleware' => 'is_admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])-> name('dashboard.index');
    Route::resource('cars', \App\Http\Controllers\Admin\CarController::class);
    Route::put('cars/update-image/{id}', [\App\Http\Controllers\Admin\CarController::class, 'updateImage'])->name('cars.updateImage');

    Route::get('messages', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('messages.index');
    Route::delete('messages/{message}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('messages.destroy');

});


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
