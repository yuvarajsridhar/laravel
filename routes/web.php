<?php

use Illuminate\Support\Facades\Redirect;

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


Route::get('/signin', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register_action','RegisterController@store');

Route::post('/login_action','LoginController@getdata');


Route::get('/logout', function () {

    Auth::logout();

    return Redirect::to('');
})->middleware('auth');
