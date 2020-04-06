<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Auth;
use DB;

class CategoryController extends Controller
{
    public function categorys()
    {
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $categories = DB::table('categories')->get();
        return view('categorys.categoryslist',['authprofile'=>$authprofile,'categories'=>$categories]);
    }

    public function savecategory(Request $request){
        $this->validate($request, [
          'name' => ['required', 'string', 'max:255'],
          'image'=>['required'],
         ]);
  
         $categorys = new Category();
         $categorys->name = $request->input('name');

         if ($request->hasFile('image')) {
              $image = $request->file('image') ;
              $destinationPath = 'uploads/categories/'; // upload path
              $category_image = 'uploads/categories/'. date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move($destinationPath, $category_image);
              $categorys->image = "$category_image";
          }else {
              $categorys->image = 'uploads/categories/default.jpg';
          } 
         $categorys->save();
         return redirect('categorys')->with('status', 'New Category Added Sucessfully');
      }

      public function categories_delete($id){
        
        $count = DB::table('recipes')->where('category_id', $id)->count();
        if ($count == 0) {
            DB::table('categories')->where('id', $id)->delete();
            return redirect()->back()->with('category_delete_status', 'category Delete Sucessfully');
        } else {
            return redirect()->back()->with('category_cantdelete_status', 'You cant delete this Category,Because Recipes Are availabe in this category');
        }
        
        return $count;
        
      }
}
