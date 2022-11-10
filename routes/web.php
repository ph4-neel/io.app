<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/getEmail', function () {
    return view('email');
});


Route::post('/getEmail', [HomeController::class, 'getEmail'])->name('getEmails');


//Api for App==============================================================================>
Route::get('/Soft_skills', [ApiController::class, 'get_SoftSkills'])->name('get_SoftSkills');
Route::get('/Hard_skills', [ApiController::class, 'GetHardSkills'])->name('GetHardSkills');
Route::get('/consumers', [HomeController::class, 'get_Consumers_List'])->name('get_consumers');

Route::get('/apis', [HomeController::class, 'api'])->name('apis');



Route::get('consumers_id/{id}', [ApiController::class, 'getConsumers_id'])->name('get_consumers_id');
Route::get('Soft_skills_id/{id}', [ApiController::class, 'get_SoftSkills_id'])->name('get_SoftSkills_id');


//Api for App==============================================================================>


//for testing




Route::get('get_data/{id}', [HomeController::class, 'getId']);
Route::get('get_del/{id}', [HomeController::class, 'destroy_skills']);

//view Routes
Route::get('/', [HomeController::class, 'home_view'])->name('home_view');
Route::get('/analytics', [HomeController::class, 'analytics_view']);
Route::get('/soft', [HomeController::class, 'getAll_Skills']);
Route::get('/data_entry', [HomeController::class, 'data']);
Route::get('/soft_list', [HomeController::class, 'get_Skills_List'])->name('soft_list');
Route::get('/set_profile', [HomeController::class, 'set_consumer_profile'])->name('set_profile');




// User Auth=============================================================================================>
Route::get('login', [HomeController::class, 'index'])->name('login');
Route::post('custom-login', [HomeController::class, 'customLogin'])->name('login');

Route::get('/register', [HomeController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [HomeController::class, 'customRegistration'])->name('register.custom');
// User Auth=============================================================================================>

// Admin Auth=============================================================================================>
Route::get('/admin_register', [HomeController::class, 'admin_register']);
Route::post('/admin_registers', [HomeController::class, 'admin_registration'])->name('admin_registration');

Route::get('/admin_login', [HomeController::class, 'admin_login'])->name('admin_login');
Route::post('/admin_login', [HomeController::class, 'admin_logins'])->name('admin_logins');
// Admin Auth=============================================================================================>


//Social Media Authentication =====================================================>
Route::get('/auth/facebook/redirect', [HomeController::class, 'facebook_redirect'])->name('facebook_redirect');
Route::get('/auth/facebook/callback', [HomeController::class, 'facebook_callback'])->name('facebook_callback');
//Social Media Authentication =====================================================>


Route::get('/profiles', [HomeController::class, 'profile_data'])->name('profiles');
Route::post('/profiles', [HomeController::class, 'home'])->name('profiles');

Route::get('signout', [HomeController::class, 'signOut'])->name('signout');


Route::post('/data_entry', [HomeController::class, 'Skill_post'])->name('data_entry');


//Consumer Routes====================================================================================>
Route::get('/consumer_register', [HomeController::class, 'consumer_Register_view']);
Route::get('/consumer_login', [HomeController::class, 'consumer_login_view']);

Route::post('/consumer_login', [HomeController::class, 'Consumers_login'])->name('Consumers_login');
Route::post('/consumer_register', [HomeController::class, 'ConsumerRegistration'])->name('consumer_register');
Route::get('/consumers_list', [HomeController::class, 'get_Consumers_List']);
