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

// Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->middleware('Admin');

Route::get('/userslist', 'UsersController@userslist')->middleware('Admin');


Route::get('logout', function () {
    Auth::logout();
    // return Redirect::route('login');
    return Redirect('/');
});

