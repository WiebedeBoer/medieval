<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Place;
use App\Culture;
use App\Person;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main
    public function index()
    {            
		$placedata = Place::with('regions')->orderBy('place_name', 'asc')->paginate(50);
		return view('place.index', compact('placedata'));        
    }
	
	//show
    public function show($id)
    {       
        $placedata = Place::with('regions')->where('place_id', $id)->firstOrFail();
        $region_id = $placedata->regions->region_id;        
		$region = Region::where('region_id', $region_id)->firstOrFail();
        $culture_id = $region->culture;
		$culture = Culture::where('culture_id', $culture_id)->firstOrFail();
		$user = auth()->user();
		return view('place.show', compact('placedata','culture','user','region'));        
    }
	
    //update function
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'place_description' => 'nullable', 
            'develop' => 'required|string:value',
            'person' => 'required|integer'    
        ]);
        //Place::where('place_id', $id)->update($data);

        $place = Place::find($id);
        $place->place_description = request('place_description');        
        $place->save();

        return redirect('/place/'.$id)->with('message', 'Updated');
    }
	
	//edit form
    public function edit($id)
    {       
        $placedata = Place::with('regions')->where('place_id', $id)->firstOrFail();
		$region_id = $placedata->regions->region_id;
		$region = Region::where('region_id', $region_id)->firstOrFail();
		$culture_id = $region->culture;
        $culture = Culture::where('culture_id', $culture_id)->firstOrFail();
        $user = auth()->user();
        $persons = Person::all();
		return view('place.edit', compact('placedata','culture','user','region','persons'));        
    }

	//build form
    public function build($id)
    {       
        $placedata = Place::with('regions')->where('place_id', $id)->firstOrFail();
		$region_id = $placedata->regions->region_id;
		$region = Region::where('region_id', $region_id)->firstOrFail();
		$culture_id = $region->culture;
        $culture = Culture::where('culture_id', $culture_id)->firstOrFail();
        $user = auth()->user();
		return view('place.build', compact('placedata','culture','user','region'));        
    }
}
