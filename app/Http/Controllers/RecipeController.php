<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Like;
use Illuminate\Http\Request;
use Auth;
Use DB;

class RecipeController extends Controller
{
    public function addrecipes()
    {
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $categories = DB::table('categories')->get();
        return view('recipes.addresipes',['authprofile'=>$authprofile,'categories'=>$categories]);
    }

    public function saverecipes(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'ingredients' => ['required', 'string', 'max:255'],
            'category'=>['required'],
            'description'=>['required'],
            'image'=>['required'],
           ]);
    
           $id =Auth::user()->id;
           $recipes = new Recipe();
           $recipes->user_id = $id;
           $recipes->name = $request->input('name');
           $recipes->ingredients = $request->input('ingredients');
           $recipes->category_id = $request->input('category');
           $recipes->description = $request->input('description');
  
           if ($request->hasFile('image')) {
                $image = $request->file('image') ;
                $destinationPath = 'uploads/recipes/'; // upload path
                $recipe_image = 'uploads/recipes/'. date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $recipe_image);
                $recipes->image = "$recipe_image";
            }else {
                $recipes->image = 'uploads/recipes/default.jpg';
            } 
           $recipes->save();

           $likes = new Like();
           $likes->recipe_id = $recipes->id;
           $likes->likes	 = '0';
           $likes->save();
           return redirect('addrecipes')->with('status', 'New Recipe Added Sucessfully');
    }

    public function managerecipes()
    {
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $recipes = DB::table('recipes')
            ->join('users', 'recipes.user_id', '=', 'users.id')
            ->join('categories', 'recipes.category_id', '=', 'categories.id')
            ->join('likes', 'recipes.id', '=', 'likes.recipe_id')
            ->select('recipes.id as id','recipes.name as recipename','recipes.ingredients as recipeingredients',
            'recipes.description as recipedescription','recipes.image as recipeimage','recipes.status as recipestatus',
             'categories.name as categoryname', 
             'users.profile_pic as userimage','users.name as username',
             'likes.likes as recipeslikes')
            ->orderBy('id', 'desc')->get();
        return view('recipes.managerecipes',['authprofile'=>$authprofile,'recipes'=>$recipes]);
    }

    public function recipe_diactivate($id){
        $task=Recipe::find($id);
        $task->status=false;
        $task->save();
       return redirect()->back()->with('user_diactivate_status', 'Recipe Was Diactivated Sucessfully');
      }

      public function recipe_activate($id){
        
        $task=Recipe::find($id);
        $task->status=true;
        $task->save();
       return redirect()->back()->with('user_activate_status', 'Recipe Was Activated Sucessfully');
      }


      public function recipe_delete($id){

            DB::table('recipes')->where('id', $id)->delete();
            DB::table('likes')->where('recipe_id', $id)->delete();
            return redirect()->back()->with('user_diactivate_status', 'Recipe Delete Sucessfully');
      }

      public function getcookbookitem(Request $request){

        $id = $request->userid;

        $recipes = DB::table('recipes')
        ->join('users', 'recipes.user_id', '=', 'users.id')
        ->join('likes', 'recipes.id', '=', 'likes.recipe_id')
        ->select('recipes.id as id','recipes.name as recipename','recipes.created_at as date',
        'recipes.description as recipedescription','recipes.image as recipeimage','recipes.status as recipestatus',
         'likes.likes as recipeslikes')
         ->where('users.id',$id)
        ->orderBy('id', 'desc')->get();

          return $recipes;

    }

    public function imageupload(Request $request){

        $id = $request->userid;

        if ($request->hasFile('image')) {
            $image = $request->file('image') ;
            $destinationPath = 'uploads/recipes/'; // upload path
            $recipe_image = 'uploads/recipes/'. date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $recipe_image);
            $recipes->image = "$recipe_image";
        }else {
            $recipes->image = 'uploads/recipes/default.jpg';
        }

        return $id;

    }


    public function menus(Request $request){


        $recipes = DB::table('recipes')
            ->join('users', 'recipes.user_id', '=', 'users.id')
            ->join('categories', 'recipes.category_id', '=', 'categories.id')
            ->join('likes', 'recipes.id', '=', 'likes.recipe_id')
            ->select('recipes.id as id','recipes.name as recipename','recipes.ingredients as recipeingredients',
            'recipes.description as recipedescription','recipes.image as recipeimage','recipes.status as recipestatus',
             'categories.name as categoryname', 'categories.id as categoryid',
             'users.profile_pic as userimage','users.name as username',
             'likes.likes as recipeslikes')
             ->where('recipes.status',true)
            ->orderBy('id', 'desc')->get();

        return $recipes;

    }


    public function saverecipesmobile(Request $request)
    {
        $JsonArray=[];
        $uid=utf8_decode($request->uid);
        $recipes_name=utf8_decode($request->recipes_name);
        $recipes_ingrediants=utf8_decode($request->recipes_ingrediants);
        $recipes_description=utf8_decode($request->recipes_description);
    

           $recipes = new Recipe();
           $recipes->user_id = $uid;
           $recipes->name = $recipes_name;
           $recipes->ingredients = $recipes_ingrediants;
           $recipes->category_id = "8";
           $recipes->description = $recipes_description;

           $decodedImage = base64_decode(($request->image));
 
            

            if(isset($request->image)){
                $recipe_image = 'uploads/recipes/'. date('YmdHis').".jpg";
                file_put_contents($recipe_image, $decodedImage);
                $recipes->image=$recipe_image;
            }else {
                $recipes->image = 'uploads/recipes/default.jpg';
            } 

  
        //    if ($request->hasFile('image')) {
        //         $image = $request->file('image') ;
        //         $destinationPath = 'uploads/recipes/'; // upload path
        //         $recipe_image = 'uploads/recipes/'. date('YmdHis') . "." . $image->getClientOriginalExtension();
        //         $image->move($destinationPath, $recipe_image);
        //         $recipes->image = "$recipe_image";
        //     }else {
        //         $recipes->image = 'uploads/recipes/default.jpg';
        //     } 
           $recipes->save();

           $likes = new Like();
           $likes->recipe_id = $recipes->id;
           $likes->likes	 = '0';
           $likes->save();

           $JsonArray['code']='1';
           $JsonArray['msg']='Your Recipe Addes Sucessfully';
           return json_encode($JsonArray);
    }

}
