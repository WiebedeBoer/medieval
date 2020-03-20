<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Place;
use App\Culture;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
	
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main
    public function index()
    {            
		$regiondata = Region::all();
		return view('region.index', compact('regiondata'));        
    }
	
	//show
    public function show($id)
    {       
        $regiondata = Region::with('places','cultures')->where('region_id', $id)->firstOrFail();
		$places = $this->countPlaces($id);
		$user = auth()->user();
		return view('region.show', compact('regiondata','places','user'));        
    }
	
    //update function
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'region_description' => 'nullable'        
        ]);
        Region::where('region_id', $id)->update($data);
        return redirect('/region/'.$id)->with('message', 'Updated');
    }
	
	//edit form
    public function edit($id)
    {       
        $regiondata = Region::with('places','cultures')->where('region_id', $id)->firstOrFail();
		$places = $this->countPlaces($id);
		return view('region.edit', compact('regiondata','places'));         
    }

    //count region
    public function countPlaces($id)
    {
        $placecount = Place::where('region', $id)->count();
        return $placecount;
    }		
	
}
