<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //

    public function __construct(){

    	$this->middleware('guest')->except(['destroy']);

    }


    public function destroy(){


    	auth()->logout();

    	return redirect('/');
    }

    public function index(){

    	return view('post.login');
    }

    public function create(Request $req){


    	if(!auth()->attempt([

    		'email' => $req['email'],

    		'password' => $req['Password']

    		])){

    		return back()->withErrors([

    				'message' => 'Wrong Email-Password Combination'

    			]);
    	}
    	

    	return redirect('/');
    }





}
