<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use DB;
use Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/checkUserType';
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function mobileLogin(Request $request){
        $JsonArray=[];
        if(isset($request->username) && isset($request->password) && $request->username!="" &&  $request->password!=""){
            $user = DB::table('users')->where('email','=', $request->username)->first();  
            if($user!=null){
                if($user->password==Hash::check($request->password, $user->password)){
                    if ($user->user_type==true && $user->status==true) {
                        $JsonArray['code']='1';
                        $JsonArray['user']=$user;
                        $JsonArray['msg']='Welcome';
                    }else{
                        $JsonArray['code']='2';
                    }
                }else{
                    $JsonArray['code']='0';
                    $JsonArray['msg']='Password Incorrect';      
                }
            
            }else{
                $JsonArray['code']='0';
                $JsonArray['msg']='Not Found Use By That Username';              
            }
        }else{
            $JsonArray['result']='error';
            $JsonArray['code']='0';
        }

        return json_encode($JsonArray);
    }

    public function checkLogin(Request $request){
        $JsonArray=[];
        if(isset($request->id) &&  $request->id!=""){
            $user = DB::table('users')->where('id','=', $request->id)->first();  
            if($user->user_type == true && $user->status==true){
                // echo Hash::check('plain-text', $request->password);
                $JsonArray['code']='1';
            } else{
                $JsonArray['msg']='Your Can not acess this Application';
                $JsonArray['code']='2';
            }
        }else{
            $JsonArray['code']='0';
            $JsonArray['msg']='Your Blocked';
        }

        return json_encode($JsonArray);
    }
}
