<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

use App\Http\Requests;
use App\User;
use App\Profile;
use Validator;
use Auth;
use Session;

class ProfileController extends Controller
{
    public function index()
    {
    	//return Auth::user()->id;
        $user = Auth::user();
    	return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
    	
    	//$input = $request->all();
    	//$request->phone;

        $data = $request->only('phone','country','city','address','pincode');  

        $profile    =   new Profile; /// create model object
        $validator  =   Validator::make($request->all(),$profile->rules);

        $user = Auth::user();

        if ($validator->fails()) {
            return view('profile',compact('user'))->withErrors($validator);
        }


        if ($request->hasFile('avatar')) {

            $file = $request->file('avatar');

            $getimageName = time().'_'.$file->getClientOriginalName();

            $file->move(public_path('profilepic/'.Auth::user()->id),$getimageName);
            $data['img_path'] = $getimageName;

        }

        

        $profile = Profile::where('user_id',Auth::user()->id)->first();
        
         if($profile)
         {

            Profile::where('user_id',Auth::user()->id)->update($data);
         }
         else
         {
            $data['user_id'] = Auth::user()->id;
            Profile::create($data);
         }

    	 return redirect()->back()->with('status', 'Profile updated!');

    }
}
