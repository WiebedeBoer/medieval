<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Dynasty;
use App\User;
use App\Culture;
use App\Person;
use App\Estate;

class EstateController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	//portrait count
	public function charactercount()
	{
		$user = auth()->user();
		$user_id = $user->id;	
		$portrait_count = Person::where('owner', $user_id)->where('alive',1)->count();
		return $portrait_count;
	}
	
	//dynasty count
	public function dynastycount()
	{
		$user = auth()->user();
		$user_id = $user->id;	
		$dynasty_count = Dynasty::where('dynasty_owner', $user_id)->count();
		return $dynasty_count;
	}
	
    //create form
    public function create(Request $request)
    { 
        $charactercount = $this->charactercount();
		$dynastycount = $this->dynastycount();

		//not allowed
		if ($charactercount <4 || $dynastycount <1){
			return redirect('/home')->with('message', 'Not allowed to create estate');
		}
		//create allowed
		else {
			return view('estates.create', compact('dynasty','users')); 
		}
	}

    //store function
    public function store()
    {     
        $charactercount = $this->charactercount();
		$dynastycount = $this->dynastycount();

		//not allowed
		if ($charactercount <4 || $dynastycount <1){
			return redirect('/home')->with('message', 'Not allowed to create estate');
		}
		//create allowed
		else {
			
			//user id
			$user = auth()->user();
			$user_id = $user->id;
			//dynasty data
			$dynasty = Dynasty::where('dynasty_owner',$user_id)->firstOrFail();	
			
			
			//return view
			return redirect('/dynasty/'.$dynasty->dynasty_id)->with('message', 'Added');
		}
	}
}
