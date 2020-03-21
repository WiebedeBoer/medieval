<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Region;
use App\Culture;
use App\Dynasty;
use App\User;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class DynastyController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main
    public function index()
    {            
		$dynastydata = Dynasty::with('cultures')->orderBy('dynasty_name', 'ASC')->paginate(50);
		$user = auth()->user();
		$ownercount = $this->ownercount();
		return view('dynasty.index', compact('dynastydata','user','ownercount'));        
    }
	
	//show
    public function show($id)
    {       
        $dynastydata = Dynasty::where('dynasty_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('dynasty.show', compact('dynastydata','user'));        
    }
	
	//owner check
	public function ownercheck($id)
	{
		$user = auth()->user();
		$dynasty_owner_check = Dynasty::where('dynasty_id', $id)->firstOrFail();
		$user_id = $user->id;
		$owner_id = $dynasty_owner_check->dynasty_owner;
		if ($user_id == $owner_id)
		{
			return $ownercheck =true;
		}
		else {
			$admincheck = $user->admin;
			if ($admincheck ==1){
				return $ownercheck =true;
			}
			else {
				return $ownercheck =false;
			}		
		}
	}
	
	//owner count
	public function ownercount()
	{
		$user = auth()->user();
		$user_id = $user->id;	
		$dynasty_owner_count = Dynasty::where('dynasty_owner', $user_id)->count();
		return $dynasty_owner_count;
	}
	
    //update function
    public function update(Request $request, $id)
    {
		$ownercheck = $this->ownercheck($id);
		if ($ownercheck ==true)
		{
			$data = $request->validate([
				'dynasty_description' => 'nullable'        
			]);
			Dynasty::where('dynasty_id', $id)->update($data);
			return redirect('/dynasty/'.$id.'/edit')->with('message', 'Updated');			
		}
		else 
		{
			return redirect('/home')->with('message', 'Not allowed');
		}

    }
	
	//edit form
    public function edit($id)
    {       
        $ownercheck = $this->ownercheck($id);
		if ($ownercheck ==true)
		{
		$dynastydata = Dynasty::where('dynasty_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('dynasty.edit', compact('dynastydata','user')); 
		}
		else 
		{
			return redirect('/home')->with('message', 'Not allowed');
		}		
    }
	
	//delete function
    public function destroy($id)
    {
 		$ownercheck = $this->ownercheck($id);
		if ($ownercheck ==true)
		{
			$dynasty = Dynasty::findOrFail($id);
			$dynasty->delete();    
			return redirect('/dynasty')->with('message', 'Removed');
		}
		else {
			return redirect('/home')->with('message', 'Not allowed');
		}
    }

    //create form
    public function create()
    {      
        $ownercount = $this->ownercount();
		if ($ownercount >=1){
			return redirect('/home')->with('message', 'Not allowed');
		}
		else {
			$dynasty = new Dynasty();
			$place = Place::all();
			$region = Region::all();
			$culture = Culture::orderBy('culture_name', 'ASC')->get();
			$users = User::all();   
			return view('dynasty.create', compact('dynasty','place','region','culture','users'));    			
		}
    
    }

    //store function
    public function store()
    {     
         $ownercount = $this->ownercount();
		if ($ownercount >=1){
			return redirect('/home')->with('message', 'Not allowed');
		}
		else {

			$data = request()->validate([
				'culture' => 'required',
				'dynasty_name' => 'required|min:3',
				'dynasty_description' => 'nullable'
			]); 
			//user id
			$user = auth()->user();
			$user_id = $user->id;
			//saving
			$dynasty = new Dynasty();       
			$dynasty->dynasty_owner = $user_id;
			$dynasty->culture = request('culture');
			$dynasty->dynasty_name = request('dynasty_name');
			$dynasty->dynasty_description = request('dynasty_description');
			$dynasty->save();       
			//return
			return redirect('/dynasty')->with('message', 'Added');
		}
    }
	
}
