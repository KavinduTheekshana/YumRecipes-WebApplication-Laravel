<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    public function welcome(){
        $recipes = DB::table('recipes')
            ->join('users', 'recipes.user_id', '=', 'users.id')
            ->join('categories', 'recipes.category_id', '=', 'categories.id')
            ->join('likes', 'recipes.id', '=', 'likes.recipe_id')
            ->select('recipes.id as id',
            'recipes.name as recipename',
            'recipes.image as recipeimage',
            'categories.name as categoryname', 
            'users.name as username',
            'likes.likes as recipeslikes')
             ->where('recipes.status',true)
            ->orderBy('id', 'desc')->get();

            return view('welcome',['recipes'=>$recipes]);

    }

    public function singlerecipe($id){
        $singlerecipes = DB::table('recipes')
            ->join('users', 'recipes.user_id', '=', 'users.id')
            ->join('categories', 'recipes.category_id', '=', 'categories.id')
            ->join('likes', 'recipes.id', '=', 'likes.recipe_id')
            ->select('recipes.id as id',
            'recipes.name as recipename',
            'recipes.ingredients as recipeingredients',
            'recipes.description as recipedescription',
            'recipes.image as recipeimage',
            'recipes.status as recipestatus',
             'categories.name as categoryname', 
             'users.profile_pic as userimage',
             'users.name as username',
             'likes.likes as recipeslikes')
            ->where('recipes.id', $id)->first();


            $recipes = DB::table('recipes')
            ->join('users', 'recipes.user_id', '=', 'users.id')
            ->join('categories', 'recipes.category_id', '=', 'categories.id')
            ->join('likes', 'recipes.id', '=', 'likes.recipe_id')
            ->select('recipes.id as id',
            'recipes.name as recipename',
            'recipes.image as recipeimage',
            'categories.name as categoryname', 
            'users.name as username',
            'likes.likes as recipeslikes')
             ->where('recipes.status',true)
            ->orderBy('id', 'desc')->get();



            return view('recipe',['singlerecipes'=>$singlerecipes,'recipes'=>$recipes]);

    }
}
