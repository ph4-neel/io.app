<?php

use App\Http\Controllers\RouteController;
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
Route::get('/course',[RouteController::class,'Coursepage_View'])->name('Coursepage');
Route::get('/coursedetail',[RouteController::class,'Coursedetail_View'])->name('Coursedetail');

