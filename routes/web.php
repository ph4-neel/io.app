<?php

use App\Http\Controllers\HomeController;
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


Route::get('/',[HomeController::class,'HomePage']);

Route::get('/login',function()
{
    return view('layouts.login');
});

Route::get('/register',function()
{
    return view('layouts.register');
});

Route::get('/forgot',function()
{
    return view('layouts.forgotpass');
});

Route::get('/logout',function()
{
    return view('layouts.logout');
});

Route::get('/instituteregister',function()
{
    return view('layouts.instituteregister');
});

Route::get('/institutelogin',function()
{
    return view('layouts.institutelogin');
});

Route::get('/enterpriseregister',function()
{
    return view('layouts.enterpriseregister');
});

Route::get('/enterpriselogin',function()
{
    return view('layouts.enterpriselogin');
});

Route::get('/companyregister',function()
{
    return view('layouts.companyregister');
});

Route::get('/companylogin',function()
{
    return view('layouts.companylogin');
});
