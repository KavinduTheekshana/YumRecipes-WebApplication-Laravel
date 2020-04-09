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

Route::get('userslist', 'UsersController@userslist')->middleware('auth');
Route::get('user_diactivate/{id}', 'UsersController@user_diactivate')->middleware('auth');
Route::get('user_activate/{id}', 'UsersController@user_activate')->middleware('auth');
Route::get('user_delete/{id}', 'UsersController@user_delete')->middleware('auth');

Route::get('categorys', 'CategoryController@categorys')->middleware('auth');
Route::POST('savecategory', 'CategoryController@savecategory')->middleware('auth');
Route::get('categories_delete/{id}', 'CategoryController@categories_delete')->middleware('auth');

Route::get('addrecipes', 'RecipeController@addrecipes')->middleware('auth');
Route::POST('saverecipes', 'RecipeController@saverecipes')->middleware('auth');
Route::get('managerecipes', 'RecipeController@managerecipes')->middleware('auth');
Route::get('recipe_diactivate/{id}', 'RecipeController@recipe_diactivate')->middleware('auth');
Route::get('recipe_activate/{id}', 'RecipeController@recipe_activate')->middleware('auth');
Route::get('recipe_delete/{id}', 'RecipeController@recipe_delete')->middleware('auth');



Route::get('profile', 'UsersController@profile')->middleware('auth');
Route::POST('changePassword', 'UsersController@changePassword')->middleware('auth');
Route::POST('updateprofilepicture', 'UsersController@updateprofilepicture')->middleware('auth');
Route::POST('updateprofiledetails', 'UsersController@updateprofiledetails')->middleware('auth');


Route::get('logout', function () {
    Auth::logout();
    // return Redirect::route('login');
    return Redirect('/');
});

