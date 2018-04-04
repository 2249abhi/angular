<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\User;
use Hash;
use Auth;
use Session;
use Validator;
use Illuminate\Support\Facades\Redirect;
use App\Post;
use App\Registeruser;

class Lms extends Controller
{
    public function __construct() {

        
    }
	
    public function index()
    {
    	
    }

    public function login() {
      
        return view('login');
    }

    public function home() {

        if (Session::has('email'))
        {
            $this->ruser    = Registeruser::all(array('fname', 'email', 'phone','created','updated','status'));
            //$this->contact  = Contactuser::all(array('name', 'email', 'phone','comment','updatetime','status'));

            return view('home', array('register' => $this->ruser));//,'contact' => $this->contact
        }
        else
        {
            return Redirect::to('/');
        }
        
    }

    public function logout() {
     
        Auth::logout();
        Session::flush();

        return Redirect::to('/');
        
    }        

    

}
