<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    //
   public function index(){


        return view('registeration.create');
    }

    public function create(Request $request){


        $request->validate([

            'email' => 'required|min:5|email',

            'Password' => 'required|min:5'

            ]);


    	$user = new User;

    	$user->email = $request['email'];

    	$user->password = bcrypt($request['Password']);


    	$user->save();

    	auth()->login($user);

    	return redirect('/');

    }
    
}
