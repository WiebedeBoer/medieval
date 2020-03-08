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
		$dynastydata = Dynasty::all();
		return view('dynasty.index', compact('dynastydata'));        
    }
	
	//show
    public function show($id)
    {       
        $dynastydata = Dynasty::where('dynasty_id', $id)->firstOrFail();
		return view('dynasty.show', compact('dynastydata'));        
    }
	
    //update function
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'dynasty_description' => 'nullable'        
        ]);
        Dynasty::where('dynasty_id', $id)->update($data);
        return redirect('/dynasty/'.$id)->with('message', 'Updated');
    }
	
	//edit form
    public function edit($id)
    {       
        $dynastydata = Dynasty::where('dynasty_id', $id)->firstOrFail();
		return view('dynasty.edit', compact('dynastydata'));        
    }
	
	//delete function
    public function destroy($id)
    {
        $dynasty = Dynasty::findOrFail($id);
        $dynasty->delete();    
        return redirect('/dynasty')->with('message', 'Removed');
    }

    //create form
    public function create()
    {      
        $dynasty = new Dynasty();
        $place = Place::all();
        $region = Region::all();
        $culture = Culture::all(); 
        $users = User::all();   
        return view('dynasty.create', compact('dynasty','place','region','culture','users'));        
    }

    //store function
    public function store()
    {     
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
