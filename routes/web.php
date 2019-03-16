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
    return view('landingpage');
});

Route::get('/dashboard', 'fronend_controller@index');
Route::get('/signin', 'fronend_controller@signin');
Route::get('/signup', 'fronend_controller@signup');
Route::get('/buyshare', 'fronend_controller@buyshare');
Route::get('/guestbrowse', 'fronend_controller@guestbrowse');