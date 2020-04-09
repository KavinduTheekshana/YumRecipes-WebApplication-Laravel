<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $recipescount = DB::table('recipes')->where(['status'=>true])->count();
        $users = DB::table('users')->count();
        $likes = DB::table('likes')->count();
        $pending = DB::table('recipes')->where(['status'=>false])->count();

        $recipes = DB::table('recipes')
            ->join('users', 'recipes.user_id', '=', 'users.id')
            ->join('categories', 'recipes.category_id', '=', 'categories.id')
            ->join('likes', 'recipes.id', '=', 'likes.recipe_id')
            ->select('recipes.id as id','recipes.name as recipename','recipes.ingredients as recipeingredients',
            'recipes.description as recipedescription','recipes.image as recipeimage','recipes.status as recipestatus',
             'categories.name as categoryname', 
             'users.profile_pic as userimage','users.name as username',
             'likes.likes as recipeslikes')
            ->orderBy('id', 'desc')->paginate(10);

            $myrecipes = DB::table('recipes')
            ->join('users', 'recipes.user_id', '=', 'users.id')
            ->join('categories', 'recipes.category_id', '=', 'categories.id')
            ->join('likes', 'recipes.id', '=', 'likes.recipe_id')
            ->select('recipes.id as id','recipes.name as recipename','recipes.ingredients as recipeingredients',
            'recipes.description as recipedescription','recipes.image as recipeimage','recipes.status as recipestatus',
             'categories.name as categoryname', 
             'users.profile_pic as userimage','users.name as username','users.id as userid',
             'likes.likes as recipeslikes')
             ->where('users.id',$id)
            ->orderBy('id', 'desc')->get();

        return view('home',['authprofile'=>$authprofile,
                            'recipescount'=>$recipescount,
                            'users'=>$users,
                            'likes'=>$likes,
                            'pending'=>$pending,
                            'recipes'=>$recipes,
                            'myrecipes'=>$myrecipes]);
    }


}
