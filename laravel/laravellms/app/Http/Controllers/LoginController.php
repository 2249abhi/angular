<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use Illuminate\Support\MessageBag;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\User;
use Validator;
use Auth;
use Session;


class LoginController extends Controller
{
	
    public function checklogin()
    {
        $data = Input::all();

        $rules = array(
        'username' => 'required|email',
        'password' => 'required|min:6',
         );

        $validator = Validator::make($data, $rules);  

        if ($validator->fails()){

            // If validation falis redirect back to login.
            return Redirect::to('/')->withInput(Input::except('password'))->withErrors($validator);
        }
        else
        {
            //$auth = User::where('Name', '=', Input::get('username'))->where('Password', '=', Hash::make(Input::get('password')))->first();
            $auth = User::where('email', '=', Input::get('username'))->where('password', '=', Input::get('password'))->first();
            
            if($auth)
            {
                Session::put('email', Input::get('username'));
                return Redirect::to('/home');                
            }
            else
            {
                $errors = new MessageBag(['loginerror' => ['Wrong username or password.']]); 
                return Redirect::to('/')->withErrors($errors);
            }


            // $userdata = array(
            // 'email' => Input::get('username'),
            // 'password' => Input::get('password')
            // );

            // if (Auth::attempt($userdata))
            // {

            //    session(['username' => Input::get('username')]); 

            //    //$email = session()->get('key');

            //    return Redirect::to('/home');
            // }
            // else
            // {
            //   $errors = new MessageBag(['loginerror' => ['Wrong username or password.']]); 
            //     return Redirect::to('/')->withErrors($errors);
            // }
            //print_r($userdata);
            
        }
    }
}
