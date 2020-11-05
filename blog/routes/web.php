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
// route de validation email 
Route::get('/validate-email/{user_id}/{token}', 'UserController@emailValidate')->name('user.validate');

Route::get('/', 'WelcomeController@index')->name('welcome'); 

Auth::routes();

Route::middleware(['auth'])->prefix('/home')->group(function(){
    Route::get('/', 'HomeController@index')->name('home'); 
});
Route::get('/send-mail-validation-user/{user_id}', 'UserController@sendMailValidation')->name('user.send.validation');
// Route::get('/home', 'HomeController@index')->name('home');

// page de contact 
Route::get('contact', 'ContactController@index')->name('contact'); 
Route::post('contact', 'ContactController@store')->name('sendContact'); 

// test 
Route::get('/test/login', 'Auth\LoginController@newLogin'); 
