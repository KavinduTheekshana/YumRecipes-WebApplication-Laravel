<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\User;
use App\Verification;
use Illuminate\Http\Request;
use DB;
use Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCode;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    public function verificationcode(Request $request){
        $JsonArray=[];

        $email = utf8_decode($request->email);
        $user = DB::table('users')->where(['email'=>$email])->count();

        $digits = 4;
        $code = rand(pow(10, $digits-1), pow(10, $digits)-1);

        if ($user==1) {;
            $verification = new Verification();
            $verification->email = $email;
            $verification->code = $code;
            $verification->save();
            $JsonArray['code']='1';
            $JsonArray['msg']='Please Check Your Email Address';
            Mail::to($email)->send(new VerificationCode($code));
         }else{
            $JsonArray['code']='0';
            $JsonArray['msg']='Cant Found Email';
         }

         return json_encode($JsonArray);
    }



    public function checkverificationcode(Request $request){
        $JsonArray=[];

        $email = utf8_decode($request->email);
        $code = utf8_decode($request->code);
        $verifications = DB::table('verifications')->latest('created_at')->first();
        $dbcode = $verifications->code;

        if ($code==$dbcode) {
            $JsonArray['code']='1';
            $JsonArray['msg']='Now You Can Change Password';
        }else {
            $JsonArray['code']='0';
            $JsonArray['msg']='Invalid Verification Code';
        }


         return json_encode($JsonArray);
    }

    public function resetpasswordmobile(Request $request){
        $JsonArray=[];

        $id = utf8_decode($request->id);
        $email = utf8_decode($request->email);
        $password = utf8_decode($request->password);
        $hashpassword = Hash::make($password);
        
        $process = DB::table('users')
                        ->where('email', $email)
                        ->update(['password' => $hashpassword]);

        

        if ($process==true) {
            $JsonArray['code']='1';
            $JsonArray['msg']='Password Change Sucessfully';
        }else {
            $JsonArray['code']='0';
            $JsonArray['msg']='Password Changing Process is Unsuccessful';
        }


         return json_encode($JsonArray);
    }



}
