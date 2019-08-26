<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use Validator;
use App\Ads;

class UserController extends Controller
{
    public function CompleteRegister(Request $request) {
        

        $this->validate($request, [
            'firstname'=> 'required',
            'middlename'=> 'required',
            'lastname'=> 'required',
            'address'=> 'required',
            'country'=> 'required',
            'state'=> 'required',
            'gender'=> 'required',
            'phone_number'=> 'required',
            'picture'=> 'file|mimes:png,jpg,jpeg,gif,svg|max:2000'
        ]);

        $path = 'profile_pix';

        if(!empty($request->file('picture'))){
            $image = $request->file('picture');
            $filename = $image->getClientOriginalName();
            $fileExtension = $image->getClientOriginalExtension();
            $newfilename = Auth::user()->id . "_" . $filename;
        }else{
            $image = null;
            $filename = null;
            $fileExtension = null;
            $newfilename = null;
        }

        $id = Auth::user()->id;

        $user = User::find($id);
        $user->first_name = strip_tags($request['firstname']);
        $user->last_name = strip_tags($request['lastname']);
        $user->middle_name = strip_tags($request['middlename']);
        $user->gender = strip_tags($request['gender']);
        $user->state = strip_tags($request['state']);
        $user->country = strip_tags($request['country']);
        $user->phone = strip_tags($request['phone_number']);
        $user->address = strip_tags($request['address']);
        $user->profile_pic = $newfilename;

        if($user->save()) {
            if(!empty($request->file('picture'))){
                $image->move($path, $newfilename);
            }
        
            return redirect()->intended('/dashboard');

        }else {
            return redirect()->back()->withErrors('Please Fill up your details properly');
        }

    }

    public function Postads(Request $request) {
        $error = [];
        $time = \Carbon\Carbon::now()->toDayDateTimeString();
        $date = \Carbon\Carbon::now()->toFormattedDateString();
        // $this->validate($request, [
        //     'projectname'=> 'required',
        //     'jobcategory'=> 'required',
        //     'aboutproject'=> 'required',
        //     'projectfile'=> 'file|mime:png,jpg,jpeg,docx,pdg|max:2000',
        //     'skill'=> 'required'
        // ]);
       
        $validation = Validator::make($request->all(), [
            'projectname'=> 'required',
            'jobcategory'=> 'required',
            'aboutproject'=> 'required',
            'skill'=>'required',
            'price'=> 'required',
            'projectfile'=> 'required|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($validation->passes()) {
            $image = $request->file('projectfile');
            $fileExtension = $image->getClientOriginalExtension();
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
           if(Auth::check()) {
            $id = Auth::user()->id;
            $user_id = Auth::user()->user_id;

            $postads = new Ads();
            $postads->category = strip_tags($request['jobcategory']);
            $postads->ad_name = strip_tags($request['projectname']);
            $postads->ad_description = strip_tags($request['aboutproject']);
            $postads->price = strip_tags($request['price']);
            $postads->price_range = strip_tags($request['price_range']);
            $postads->date = $date;
            $postads->time = $time;
            $postads->user_id = $user_id;
            
            if($postads->save()) {
                return response()->json([
                    'message'=> 'Ads Posted',
                    'class_name'=>'alert_success'
                ]);

            }


                
                //upload data to database
            }else {
                $postads = new Ads();
                $postads->category = strip_tags($request['jobcategory']);
                $postads->ad_name = strip_tags($request['projectname']);
                $postads->ad_description = strip_tags($request['aboutproject']);
                $postads->price = strip_tags($request['price']);
                $postads->price_range = strip_tags($request['price_range']);
                $postads->date = $date;
                $postads->time = $time;
                $postads->ad_id = $this->user_id();
                if($postads->save()){
                    return response()->json([
                    'message'=> 0,
                    'class_name' => 'alert-danger'
                    ]);

                }
                
                
            }

        }else {
           
            return response()->json([
                'message'=> $validation->errors()->all(),
                'class_name'=> 'alert-danger',
                'projectfile' => ''
            ]);
        }
        

        
    }

    private function user_id() {
        $pin=mt_rand(100000,999999);
        $user_no=str_shuffle($pin);
        return $user_no;
     }

   
}
