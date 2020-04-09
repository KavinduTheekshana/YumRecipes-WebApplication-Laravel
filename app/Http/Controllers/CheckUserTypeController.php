<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CheckUserTypeController extends Controller
{
    public function checkUserType(){

        if(Auth::user()->user_type == false){
            return redirect('home');
        }
        else if(Auth::user()->user_type == true){
            return redirect('home');
        }
      else{
        return redirect()->route('/');
      }
  }
}
