<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Profile;

class UserController extends Controller
{
    public function index()
    {
    	$user = User::find(1)->profile->telephone;


    	echo "Phone test:".$user;

    	/*$profile = new Profile;
    	$profile->telephone = "8745215632";


    	$user = User::find(1);
    	$user->profile()->save($profile);*/
    }
}
