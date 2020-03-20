<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

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
	
	//show
    public function update(Request $request, $id)
    {       
        $data = $request->validate([
            'audio' => 'required'         
        ]);        
        
        $user = new User();
        User::where('id',$id)->update($data);
        return redirect('/users/'.$id)->with('message', 'Changed');     
    }	
	
}
