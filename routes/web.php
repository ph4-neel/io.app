<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



//Api for App==============================================================================>
Route::get('/Soft_skills',[ApiController::class,'get_SoftSkills'])->name('get_SoftSkills');
Route::get('/Hard_skills',[ApiController::class,'GetHardSkills'])->name('GetHardSkills');
Route::get('/consumers',[ApiController::class,'getConsumers'])->name('get_consumers');

Route::get('/apis',[HomeController::class,'api'])->name('apis');



Route::get('consumers_id/{id}',[ApiController::class,'getConsumers_id'])->name('get_consumers_id');
Route::get('Soft_skills_id/{id}',[ApiController::class,'get_SoftSkills_id'])->name('get_SoftSkills_id');


//Api for App==============================================================================>


//for testing




Route::get('get_data/{id}', [HomeController::class, 'getId']);
Route::get('get_del/{id}', [HomeController::class, 'destroy_skills']);

//view Routes
Route::get('/',[HomeController::class,'home_view']) ->name('home_view');
Route::get('/analytics', [HomeController::class, 'analytics_view']);
Route::get('/soft',[HomeController::class,'getAll_Skills']);
Route::get('/data_entry',[HomeController::class,'data']);
Route::get('/soft_list',[HomeController::class,'get_Skills_List']) ->name('soft_list');
Route::get('/profile',[HomeController::class,'profile_view']);
Route::get('/customerdetail',[HomeController::class,'customerdetail_view']);






// User Auth=============================================================================================>
Route::get('login', [HomeController::class, 'index'])->name('login');
Route::post('custom-login', [HomeController::class, 'customLogin'])->name('login');

Route::get('/register', [HomeController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [HomeController::class, 'customRegistration'])->name('register.custom');
// User Auth=============================================================================================>

// Admin Auth=============================================================================================>
Route::get('/admin_register',[HomeController::class,'admin_register']);
Route::post('/admin_registers',[HomeController::class,'admin_registration']) ->name('admin_registration');

Route::get('/company_register',[HomeController::class,'company_register']);
Route::post('/company_registers',[HomeController::class,'company_registration']) ->name('company_registration');

Route::get('/enterprise_register',[HomeController::class,'enterprise_register']);
Route::post('/enterprise_registers',[HomeController::class,'enterprise_registration']) ->name('enterprise_registration');

Route::get('/institute_register',[HomeController::class,'institute_register']);
Route::post('/institute_registers',[HomeController::class,'institute_registration']) ->name('institute_registration');

Route::get('/admin_login',[HomeController::class,'admin_login']) ->name('admin_login');
Route::post('/admin_login',[HomeController::class,'admin_logins']) ->name('admin_logins');

Route::get('/company_login',[HomeController::class,'company_login']) ->name('company_login');
Route::post('/company_login',[HomeController::class,'company_logins']) ->name('company_logins');

Route::get('/enterprise_login',[HomeController::class,'enterprise_login']) ->name('enterprise_login');
Route::post('/enterprise_login',[HomeController::class,'enterprise_logins']) ->name('enterprise_logins');

Route::get('/institute_login',[HomeController::class,'institute_login']) ->name('institute_login');
Route::post('/institute_login',[HomeController::class,'institute_logins']) ->name('institute_logins');

Route::get('/course_page',[HomeController::class,'course_page']) ->name('course_page');
Route::post('/course_page',[HomeController::class,'course_pages']) ->name('course_pages');
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


Route::post('/data_entry',[HomeController::class,'Skill_post']) ->name('data_entry');
//profile===========================================================================>

