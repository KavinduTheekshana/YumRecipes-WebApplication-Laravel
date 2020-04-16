<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mobilelogin','auth\LoginController@mobileLogin');
Route::get('checkLogin','auth\LoginController@checkLogin');
Route::get('currentpassword','auth\LoginController@currentpassword');
Route::get('updatePasswordMobile','auth\LoginController@updatePasswordMobile');
Route::get('changeprofiledetails','auth\LoginController@changeprofiledetails');


Route::get('signup','auth\RegisterController@signup');


Route::get('verificationcode','auth\ResetPasswordController@verificationcode');
Route::get('checkverificationcode','auth\ResetPasswordController@checkverificationcode');
Route::get('resetpasswordmobile','auth\ResetPasswordController@resetpasswordmobile');


Route::get('getCategoryItem','CategoryController@getCategoryItem');

Route::get('getcookbookitem','RecipeController@getcookbookitem');
Route::POST('saverecipesmobile','RecipeController@saverecipesmobile');
Route::get('imageupload','RecipeController@imageupload');


Route::get('menus','RecipeController@menus');
