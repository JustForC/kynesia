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

Route::get('/',"UserAuthentication\LoginController@showLoginForm" );


// Route::get('/home', 'UserAuthentication\LoginController@showLoginForm');

//Route for user registration
Route::get('/register',"UserAuthentication\RegisterController@showRegisterForm");
Route::post('/register',"UserAuthentication\RegisterController@doRegister");

//Route for authentication
Route::get('/login',"UserAuthentication\LoginController@showLoginForm")->name('login');
Route::post('/login',"UserAuthentication\LoginController@doLogin");
Route::get('/logout',"UserAuthentication\LoginController@doLogout");

//Route for inputing document
Route::get('/dashboard',"User\DataPribadiController@dashboard")->middleware('auth');
Route::get('/dashboard/datadiri',"User\DataPribadiController@showForm")->middleware('auth');
Route::post('/dashboard/datadiri',"User\DataPribadiController@doInput")->middleware('auth');