<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;
use App\Models\Admin;
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
Route::get('/Admin_Skills',[RouteController::class,'Skills']);

Route::get('/User_Register',[UserController::class,'User_Register_View'])->name('User_Register');
Route::post('/User_Register',[UserController::class,'Register'])->name('User_Register');
Route::get('/User_Login',[UserController::class,'User_Login_View'])->name('User_Login');
Route::get('/User_DashBoard',[UserController::class,'User_DashBoard'])->name('User_DashBoard');
Route::get('/logout',[UserController::class,'Logout'])->name('Logout');


Route::get('/admins',[AdminController::class,'Admin_Login'])->name('Admin_Login');
Route::post('/admin_login',[AdminController::class,'Login'])->name('admin_login');

Route::get('/Super_admin',[AdminController::class,'Super_Admin']);

Route::post('/Save',[AdminController::class,'Save_Skills']);

Route::get('/Skills_add',function(){

    return view('superadmin.Skills_Add');

});

Route::get('/test',function(){

    return view('superadmin.admin');

});

