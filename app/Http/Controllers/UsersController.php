<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class UsersController extends Controller
{
    public function userslist()
    {
        $id =Auth::user()->id;
        $authprofile = DB::table('users')->where(['id'=>$id])->first();
        $allusers = DB::table('users')->where(['user_type'=>1])->get();
        return view('users.userslist',['authprofile'=>$authprofile,'allusers'=>$allusers]);
    }
}
