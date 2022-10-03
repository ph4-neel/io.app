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

Route::get('/login',function()
{
    return view('layouts.login');
});

<<<<<<< HEAD
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
=======
//instructor Auth



Route::get('/profiles',[HomeController::class,'profile_data']) ->name('profiles');
Route::post('/profiles',[HomeController::class,'home']) ->name('profiles');

Route::get('signout', [HomeController::class, 'signOut'])->name('signout');

>>>>>>> 620d4d3bbb127d5745128b1bcc1d75ac16b555b3
