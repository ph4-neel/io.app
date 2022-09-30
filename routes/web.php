<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




//view Routes
Route::get('/',[HomeController::class,'home']);
Route::get('dashboard', [HomeController::class, 'dashboard']);
Route::get('/home',[HomeController::class,'home']);

// User Auth
Route::get('login', [HomeController::class, 'index'])->name('login');
Route::post('custom-login', [HomeController::class, 'customLogin'])->name('login');

Route::get('/register', [HomeController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [HomeController::class, 'customRegistration'])->name('register.custom');
// User Auth

// Admin Auth
Route::get('/admin_register',[HomeController::class,'admin_register']);
Route::post('/admin_registers',[HomeController::class,'admin_registration']) ->name('admin_registration');

Route::get('/admin_login',[HomeController::class,'admin_login']) ->name('admin_login');
Route::post('/admin_login',[HomeController::class,'admin_logins']) ->name('admin_logins');
// Admin Auth


//instructor Auth



Route::get('/profiles',[HomeController::class,'profile_data']) ->name('profiles');
Route::post('/profiles',[HomeController::class,'home']) ->name('profiles');

Route::get('signout', [HomeController::class, 'signOut'])->name('signout');

