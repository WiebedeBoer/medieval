<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	
	//show
    public function show($id)
    {       
        $userdata = User::where('id', $id)->firstOrFail();
		return view('users.show', compact('userdata'));        
    }
}
