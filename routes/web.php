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

Route::get ('/project', function(){
    return view('layouts.project-management');
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

