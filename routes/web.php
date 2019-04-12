<?php

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
    return view('home');
});

Route::get('/profile', function(){
  if(Auth::check()){
    return view('profile');
  }
  else{
    return view('/login');
  }
});

Auth::routes();
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('accueil');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
