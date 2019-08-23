<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;

class AuthController extends Controller
{
    // rending the view login to view
    public function login(){
        return view('pages.login');
    }

    public function signup() {
        return view('pages.signup');
    }

    public function forgetPassword() {
        return view('pages.forgetpassword');
    }

    public function CompleteRegister() {
        return view('pages.completeregister');
    }

    public function Dashboard() {
        return view('pages.dashboard');
    }

    public function Register(Request $request) {
        $time = \Carbon\Carbon::now()->toDayDateTimeString();
        $date = \Carbon\Carbon::now()->toFormattedDateString();
        $this->validate($request, [
            'email'=>'email|required|unique:users',
            'password'=>'required|min:5|confirmed'
        ]);
        //dd($time);

        $user = new User();
        $user->email = strip_tags($request['email']);
        $user->password = \bcrypt($request['password']);
        $user->user_id = $this->user_id();
        $user->time = $time;
        $user->date = $date;

        if($user->save()) {
            Auth::login($user);
           return redirect()->route('complete'); 
           
        }else {
            return redirect()->back()->withErrors('Fill your details correctly');
        }
        

    }

    public function Sigin(Request $request) {

        $this->validate($request,[
    		'email'=>'required',
    		'password'=> 'required'
        ]);
        $email = strip_tags($request['email']);
        $password = $request['password'];
        
        if(Auth::attempt(['email'=> $email, 'password'=>$password])) {
           //dd('Login');
           return redirect()->route('dashboard');

        }else{
            return redirect()->back()->withErrors('Username or Password is incorrect')->withInput();
        }

    }

    private function user_id() {
        $pin=mt_rand(100000,999999);
        $user_no=str_shuffle($pin);
        return $user_no;
     }

     public function Logout() {
         
         Auth::logout();
         return redirect()->route('login');
     }
}
