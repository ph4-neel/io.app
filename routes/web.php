<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



//Api for App
Route::get('/getData',[ApiController::class,'get_SoftSkills']);


//for testing

Route::get('/getSkills',[HomeController::class,'getAll_Skills']) ->name('getAll_Skills');



//view Routes
Route::get('/',[HomeController::class,'home_view']) ->name('home_view');
Route::get('/analytics', [HomeController::class, 'analytics_view']);

// User Auth=============================================================================================>
Route::get('login', [HomeController::class, 'index'])->name('login');
Route::post('custom-login', [HomeController::class, 'customLogin'])->name('login');

Route::get('/register', [HomeController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [HomeController::class, 'customRegistration'])->name('register.custom');
// User Auth=============================================================================================>

// Admin Auth=============================================================================================>
Route::get('/admin_register',[HomeController::class,'admin_register']);
Route::post('/admin_registers',[HomeController::class,'admin_registration']) ->name('admin_registration');

Route::get('/admin_login',[HomeController::class,'admin_login']) ->name('admin_login');
Route::post('/admin_login',[HomeController::class,'admin_logins']) ->name('admin_logins');
// Admin Auth=============================================================================================>


//instructor Auth==================================================================>
Route::get('/ins_reg',[HomeController::class,'ins_reg_view']);
Route::post('/ins_reg',[HomeController::class,'ins_reg_view']) ->name('instructor-register');

Route::get('/ins_login',[HomeController::class,'ins_log_view']) ->name('ins_login');
Route::post('/ins_login',[HomeController::class,'ins_log_view']) ->name('ins_logins');

//instructor Auth==================================================================>

//Social Media Authentication =====================================================>
Route::get('/auth/facebook/redirect',[HomeController::class,'facebook_redirect']) ->name('facebook_redirect');
Route::get('/auth/facebook/callback',[HomeController::class,'facebook_callback']) ->name('facebook_callback');
//Social Media Authentication =====================================================>


Route::get('/profiles',[HomeController::class,'profile_data']) ->name('profiles');
Route::post('/profiles',[HomeController::class,'home']) ->name('profiles');

Route::get('signout', [HomeController::class, 'signOut'])->name('signout');

