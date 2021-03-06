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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// page de contact 
Route::get('contact', 'ContactController@index')->name('contact'); 

//page about 
Route::get('about', 'AboutController@index')->name('about');

// page fiche de poste 
Route::get('postule', 'PostulerController@index')->name('postule');
