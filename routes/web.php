<?php

use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Routes============================================================>

Route::get('/',[RouteController::class,'Homepage_View'])->name('Homepage');

Route::get('/User_Register',[UserController::class,'User_Register_View'])->name('User_Register');
Route::post('/User_Register',[UserController::class,'Register'])->name('User_Register');
Route::get('/User_Login',[UserController::class,'User_Login_View'])->name('User_Login');
Route::get('/User_DashBoard',[UserController::class,'User_DashBoard'])->name('User_DashBoard');
Route::get('/logout',[UserController::class,'Logout'])->name('Logout');


// <===Error==>
Route::get('/error',[RouteController::class,'error_pages'])->name('error');
// <===Error==>

// <===Profile==>
Route::get('/Profile',[RouteController::class,'Profile_pages'])->name('Profile');
// <===Profile==>

// <===Admin login & register==>
Route::get('/Admin_login',[RouteController::class,'Admin_login_Auth'])->name('Admin_login_Auth');
Route::get('/Admin_register',[RouteController::class,'Admin_register_Auth'])->name('Admin_register_Auth');
// <===Admin login & register==>



