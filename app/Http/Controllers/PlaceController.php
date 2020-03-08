<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Place;
use App\Culture;
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
		$placedata = Place::all();
		return view('place.index', compact('placedata'));        
    }
	
	//show
    public function show($id)
    {       
        $placedata = Place::where('place_id', $id)->firstOrFail();
		return view('place.show', compact('placedata'));        
    }
	
    //update function
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'place_description' => 'nullable'        
        ]);
        Place::where('place_id', $id)->update($data);
        return redirect('/place/'.$id)->with('message', 'Updated');
    }
	
	//edit form
    public function edit($id)
    {       
        $placedata = Place::where('place_id', $id)->firstOrFail();
		return view('place.edit', compact('placedata'));        
    }
}
