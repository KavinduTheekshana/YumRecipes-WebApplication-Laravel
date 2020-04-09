<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

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

Route::get('/checkUserType','CheckUserTypeController@checkUserType');



Route::get('/', 'WelcomeController@welcome');
Route::get('singlerecipe/{id}', 'WelcomeController@singlerecipe');


Auth::routes();

// Route::get('logout', 'Auth\LoginController@logout');

Route::get('home', 'HomeController@index')->middleware('auth');

Route::get('userslist', 'UsersController@userslist')->middleware('admin');
Route::get('user_diactivate/{id}', 'UsersController@user_diactivate')->middleware('admin');
Route::get('user_activate/{id}', 'UsersController@user_activate')->middleware('admin');
Route::get('user_delete/{id}', 'UsersController@user_delete')->middleware('admin');

Route::get('categorys', 'CategoryController@categorys')->middleware('admin');
Route::POST('savecategory', 'CategoryController@savecategory')->middleware('admin');
Route::get('categories_delete/{id}', 'CategoryController@categories_delete')->middleware('admin');

Route::get('addrecipes', 'RecipeController@addrecipes')->middleware('auth');
Route::POST('saverecipes', 'RecipeController@saverecipes')->middleware('auth');
Route::get('managerecipes', 'RecipeController@managerecipes')->middleware('admin');
Route::get('recipe_diactivate/{id}', 'RecipeController@recipe_diactivate')->middleware('admin');
Route::get('recipe_activate/{id}', 'RecipeController@recipe_activate')->middleware('admin');
Route::get('recipe_delete/{id}', 'RecipeController@recipe_delete')->middleware('admin');



Route::get('profile', 'UsersController@profile')->middleware('auth');
Route::POST('changePassword', 'UsersController@changePassword')->middleware('auth');
Route::POST('updateprofilepicture', 'UsersController@updateprofilepicture')->middleware('auth');
Route::POST('updateprofiledetails', 'UsersController@updateprofiledetails')->middleware('auth');


Route::get('logout', function () {
    Auth::logout();
    // return Redirect::route('login');
    return Redirect('/');
});

