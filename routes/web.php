<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Registration and Login Routes
Route::get('/register', 'App\Http\Controllers\RegistrationController@showRegistrationForm')->name('show_registration_form');
Route::post('/register', 'App\Http\Controllers\RegistrationController@processRegistration')->name('process_registration');
Route::get('/login', 'App\Http\Controllers\LoginController@showLoginForm')->name('show_login_form');
Route::post('/login', 'App\Http\Controllers\LoginController@processUserLogin')->name('process_login');
Route::post('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

//dashboard

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');


