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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'WelcomeController@welcome');
Route::get('singlerecipe/{id}', 'WelcomeController@singlerecipe');


Auth::routes();

// Route::get('logout', 'Auth\LoginController@logout');

Route::get('home', 'HomeController@index')->middleware('Admin');

Route::get('userslist', 'UsersController@userslist')->middleware('Admin');
Route::get('user_diactivate/{id}', 'UsersController@user_diactivate')->middleware('Admin');
Route::get('user_activate/{id}', 'UsersController@user_activate')->middleware('Admin');
Route::get('user_delete/{id}', 'UsersController@user_delete')->middleware('Admin');

Route::get('categorys', 'CategoryController@categorys')->middleware('Admin');
Route::POST('savecategory', 'CategoryController@savecategory')->middleware('Admin');
Route::get('categories_delete/{id}', 'CategoryController@categories_delete')->middleware('Admin');

Route::get('addrecipes', 'RecipeController@addrecipes')->middleware('Admin');
Route::POST('saverecipes', 'RecipeController@saverecipes')->middleware('Admin');
Route::get('managerecipes', 'RecipeController@managerecipes')->middleware('Admin');
Route::get('recipe_diactivate/{id}', 'RecipeController@recipe_diactivate')->middleware('Admin');
Route::get('recipe_activate/{id}', 'RecipeController@recipe_activate')->middleware('Admin');
Route::get('recipe_delete/{id}', 'RecipeController@recipe_delete')->middleware('Admin');



Route::get('profile', 'UsersController@profile')->middleware('Admin');
Route::POST('changePassword', 'UsersController@changePassword')->middleware('Admin');
Route::POST('updateprofilepicture', 'UsersController@updateprofilepicture')->middleware('Admin');
Route::POST('updateprofiledetails', 'UsersController@updateprofiledetails')->middleware('Admin');


Route::get('logout', function () {
    Auth::logout();
    // return Redirect::route('login');
    return Redirect('/');
});

