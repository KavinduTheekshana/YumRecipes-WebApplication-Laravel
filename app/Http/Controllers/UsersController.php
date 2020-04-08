<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use Hash;

class UsersController extends Controller
{
    public function userslist()
    {
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $allusers = DB::table('users')->where(['user_type'=>1])->get();
        return view('users.userslist',['authprofile'=>$authprofile,'allusers'=>$allusers]);
    }

    public function user_diactivate($id){
        $task=User::find($id);
        $task->status=false;
        $task->save();
       return redirect()->back()->with('user_diactivate_status', 'Profile Was Diactivated Sucessfully');
      }

      public function user_activate($id){
        
        $task=user::find($id);
        $task->status=true;
        $task->save();
       return redirect()->back()->with('user_activate_status', 'Profile Was Activated Sucessfully');
      }

      public function user_delete($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect()->back()->with('user_activate_status', 'Profile Delete Sucessfully');
      }


      public function profile()
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
             'users.profile_pic as userimage','users.name as username','users.id as userid',
             'likes.likes as recipeslikes')
             ->where('users.id',$id)
            ->orderBy('id', 'desc')->get();
        return view('profile.profile',['authprofile'=>$authprofile,'recipes'=>$recipes]);
    }


    public function changePassword(Request $request){

      if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
          // The passwords matches
          return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
      }
  
      if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
          //Current password and new password are same
          return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
      }
  
      $validatedData = $request->validate([
          'current-password' => 'required',
          'new-password' => 'required|string|min:6|confirmed',
      ]);
  
      //Change Password
      $user = Auth::user();
      $user->password = bcrypt($request->get('new-password'));
      $user->save();
  
      return redirect()->back()->with("status","Password changed successfully !");
  
  }


  public function updateprofilepicture(Request $request){
    $this->validate($request, [
      'profile_pic' => ['required'],
     ]);


     $users = new user();
     $user_id=$request->input('user_id');
     if ($request->hasFile('profile_pic')) {
        $image = $request->file('profile_pic') ;
        $destinationPath = 'uploads/profile_pic/'; // upload path
        $profile_pic = 'uploads/profile_pic/'. date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profile_pic);
        $users->profile_pic = "$profile_pic";
    }




     $data=array(
      'profile_pic' => $users->profile_pic,
    );
    user::where('id',$user_id)->update($data);
        
     $users->update();
     return redirect()->back()->with('status', 'Profile Picture Update Sucessfully');
  }



  public function updateprofiledetails(Request $request){
    $this->validate($request, [
      'name' => ['required'],
     ]);


     $id =Auth::user()->id;
     $users = new user();
     $users->name = $request->input('name');




     $data=array(
      'name' => $users->name,
    );
    user::where('id',$id)->update($data);
        
     $users->update();
     return redirect()->back()->with('status', 'Profile Picture Update Sucessfully');
  }
}
