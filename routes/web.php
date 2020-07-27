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
 Route::get('/mumbai', function () {
   return view('mumbai');
 });
 Route::get('/pune', function () {
    return view('pune');
 });
 Route::get('/nasik', function () {
    return view('nasik');
});



// Route::middleware('auth')->group(function(){});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/user', 'userController@index')->name('user');
// Route::get('/admin', 'adminController@index')->name('admin');


 Route::get('/radio', 'RadioController@index');
 Route::get('/radio/create', 'RadioController@create');
 Route::get('/radiocity', 'radiocityController@index');
 Route::get('/red', 'RedController@index');







