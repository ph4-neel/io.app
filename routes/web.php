<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get ('/', function(){
    return view('home');
});

Route::get ('/dash', function(){
    return view('layouts.index');
});



Route::get ('/anal', function(){
    return view('layouts.analytics');
});

Route::get ('/crms', function(){
    return view('layouts.crm');
});

Route::get ('/ecom', function(){
    return view('layouts.ecom');
});

Route::get ('/footer', function(){
    return view('layouts.footer');
});

Route::get ('/entry_soft', function(){
    return view('layouts.entry_soft');
});


Route::get ('/project', function(){
    return view('layouts.project-management');
});

Route::get ('/soft', function(){
    return view('layouts.softskills');
});




Route::get ('/saas', function(){
    return view('layouts.saas');
});

Route::get ('/courses', function(){
    return view('layouts.courses');
});

Route::get ('/details', function(){
    return view('layouts.courses_details');
});

//for testing

Route::get('/test',[HomeController::class,'test']) ->name('test');


//view Routes
Route::get('/',[HomeController::class,'home']);
Route::get('dashboard', [HomeController::class, 'dashboard']);
Route::get('/home',[HomeController::class,'home']);

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

//Social Media Authentication =====================================================>
Route::get('/auth/facebook/redirect',[HomeController::class,'facebook_redirect']) ->name('facebook_redirect');
Route::get('/auth/facebook/callback',[HomeController::class,'facebook_callback']) ->name('facebook_callback');
//Social Media Authentication =====================================================>


Route::get('/profiles',[HomeController::class,'profile_data']) ->name('profiles');
Route::post('/profiles',[HomeController::class,'home']) ->name('profiles');

Route::get('signout', [HomeController::class, 'signOut'])->name('signout');

