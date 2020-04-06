<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;

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
}
