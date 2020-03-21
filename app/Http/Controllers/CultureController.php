<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Place;
use App\Culture;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class CultureController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main culture map
    public function index()
    {            	
		$regionalculture = Region::with('cultures')->get();
		return view('culture.index', compact('regionalculture'));        
    }
	
	//show
    public function show($id)
    {       
        $culturedata = Culture::with('regions')->where('culture_id', $id)->firstOrFail();
		$regions = $this->countRegion($id);
		$user = auth()->user();
		return view('culture.show', compact('culturedata','regions','user'));        
    }
	
    //count region
    public function countRegion($id)
    {
        $regioncount = Region::where('culture', $id)->count();
        return $regioncount;
    }		
	
    //update function
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'culture_description' => 'nullable'        
        ]);
        Culture::where('culture_id', $id)->update($data);
        return redirect('/culture/'.$id)->with('message', 'Updated');
    }
	
	//edit form
    public function edit($id)
    {       
        $culturedata = Culture::with('regions')->where('culture_id', $id)->firstOrFail();
		$regions = $this->countRegion($id);
		return view('culture.edit', compact('culturedata','regions'));     
    }
	

	
	
}
