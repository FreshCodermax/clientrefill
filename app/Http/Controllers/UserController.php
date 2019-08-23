<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;

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
        
            return redirect()->route('dashboard');

        }else {
            return redirect()->back()->withErrors('Please Fill up your details properly');
        }

    }

    public function Postads(Request $request) {
        $this->validate($request, [
            'projectname'=> 'required',
            'jobcategory'=> 'required',
            'aboutproject'=> 'required',
            'projectfile'=> 'file|mime:png,jpg,jpeg,docx,pdg|max:2000',
            'skill'=> 'required'
        ]);

        if(Auth::check()) {
            //code

        }
    }
   
}
