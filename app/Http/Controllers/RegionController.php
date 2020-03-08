<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Place;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
	
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//region main map
    public function index()
    {            
		$regiondata = Region::all();
		return view('region.index', compact('regiondata'));        
    }
	
	//region show
    public function show($id)
    {       
        $regiondata = Region::where('region_id', $id)->firstOrFail();
		return view('region.show', compact('regiondata'));        
    }
	
    //update function
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'region_description' => 'nullable', 
            'region_story' => 'required|date'         
        ]);
        Region::where('region_id', $id)->update($data);
        return redirect('/region/'.$id)->with('message', 'Updated');
    }
	
	//region show
    public function edit($id)
    {       
        $regiondata = Region::where('region_id', $id)->firstOrFail();
		return view('region.edit', compact('regiondata'));        
    }	
	
}
