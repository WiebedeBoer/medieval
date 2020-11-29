<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Realm;
use App\Citizen;
use App\Guild;
use App\Place;
use App\Capital;
use App\Culture;
use App\Ruler;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class RealmController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main 
    public function index()
    {            	
		$realmdata = Realm::with('cultures','dynasties','capitals','places','rulers')->where('realm_id', '>=', 2)->orderBy('realm_name','ASC')->get();	
		foreach($realmdata as $realm){
				if(is_null($realm->capitals)){
					$realm->existence =0;
				}
				else {
					$realm->capital = $realm->capitals['capital'];
					$placedata = Place::where('place_id',$realm->capital)->first();
					$realm->place_name = $placedata->place_name;
					$realm->existence = Place::where('realm',$realm->realm_id)->count();
				}
				
				if(is_null($realm->rulers)){

				}
				else {
					$realm->cabinet = $realm->rulers['cabinet_id'];
					$rulerdata = Ruler::with('rulers','chancellors','chamberlains','marshalls','admirals','stewards')->where('cabinet_id',$realm->cabinet)->first();
					$realm->ruler_name = $rulerdata->rulers->person_name;
					$realm->chancellor = $rulerdata->chancellors->person_name;
					$realm->chamberlain = $rulerdata->chamberlains->person_name;
					$realm->marshall = $rulerdata->marshalls->person_name;
					$realm->admiral = $rulerdata->admirals->person_name;
					$realm->steward = $rulerdata->stewards->person_name;
				}				
		}		
		return view('realms.index', compact('realmdata'));        
    }
	
	//show
    public function show($id)
    {       
        $realm = Realm::with('cultures','dynasties','capitals','citizens','guilds','places','rulers')->where('realm_id', $id)->firstOrFail();
		$citizencount = $this->countCitizens($id);
		if ($citizencount >=1){
			$citizens = Citizen::with('citizens')->where('realm', $id)->get();
		}
		else {
			$citizens =[];
		}
		$guildcount = $this->countGuilds($id);
		if ($guildcount >=1){
			$guilds = Guild::where('realm', $id)->get();
		}
		else {
			$guilds =[];
		}
		$user = auth()->user();
		if(is_null($realm->capitals)){
			$realm->existence =0;
		}
		else {
			$realm->capital = $realm->capitals['capital'];
			$placedata = Place::where('place_id',$realm->capital)->first();
			$realm->place_name = $placedata->place_name;
			$realm->existence = Place::where('realm',$realm->realm_id)->count();
		}
		if($realm->existence >=1){
			$placedata = Place::with('regions')->where('realm',$realm->realm_id)->orderBy('place_name', 'asc')->get();
		}
		else {
			$placedata =[];
		}

		if(is_null($realm->rulers)){

		}
		else {
			$realm->cabinet = $realm->rulers['cabinet_id'];
			$rulerdata = Ruler::with('rulers','chancellors','chamberlains','marshalls','admirals','stewards')->where('cabinet_id',$realm->cabinet)->first();
			$realm->ruler_name = $rulerdata->rulers->person_name;
			$realm->chancellor = $rulerdata->chancellors->person_name;
			$realm->chamberlain = $rulerdata->chamberlains->person_name;
			$realm->marshall = $rulerdata->marshalls->person_name;
			$realm->admiral = $rulerdata->admirals->person_name;
			$realm->steward = $rulerdata->stewards->person_name;
		}
		return view('realms.show', compact('realm','citizencount','citizens','user','guildcount','guilds','placedata'));        
    }	
	
	//edit
    public function edit($id)
    {       
        $realm = Realm::with('cultures','dynasties','capitals','citizens','guilds','places','rulers')->where('realm_id', $id)->firstOrFail();
		$citizencount = $this->countCitizens($id);
		if ($citizencount >=1){
			$citizens = Citizen::with('citizens')->join('people', 'people.person_id', '=', 'citizens.citizen')->where('realm', $id)->orderBy('people.dynasty', 'ASC')->orderBy('people.person_id', 'ASC')->get();
		}
		else {
			$citizens =[];
		}
		$guildcount = $this->countGuilds($id);
		if ($guildcount >=1){
			$guilds = Guild::where('realm', $id)->get();
		}
		else {
			$guilds =[];
		}
		$user = auth()->user();
		if(is_null($realm->capitals)){
			$realm->existence =0;
		}
		else {
			$realm->capital = $realm->capitals['capital'];
			$placedata = Place::where('place_id',$realm->capital)->first();
			$realm->place_name = $placedata->place_name;
			$realm->existence = Place::where('realm',$realm->realm_id)->count();
		}
		if($realm->existence >=1){
			$placedata = Place::with('regions')->where('realm',$realm->realm_id)->orderBy('place_name', 'asc')->get();
		}
		else {
			$placedata =[];
		}

		if(is_null($realm->rulers)){

		}
		else {
			$realm->cabinet = $realm->rulers['cabinet_id'];
			$rulerdata = Ruler::with('rulers','chancellors','chamberlains','marshalls','admirals','stewards')->where('cabinet_id',$realm->cabinet)->first();
			$realm->ruler_name = $rulerdata->rulers->person_name;
			$realm->chancellor = $rulerdata->chancellors->person_name;
			$realm->chamberlain = $rulerdata->chamberlains->person_name;
			$realm->marshall = $rulerdata->marshalls->person_name;
			$realm->admiral = $rulerdata->admirals->person_name;
			$realm->steward = $rulerdata->stewards->person_name;
		}
		return view('realms.edit', compact('realm','citizencount','citizens','user','guildcount','guilds'));        
    }
	
    //update function
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'chancellor' => 'nullable', 
			'chamberlain' => 'nullable',
			'marshall' => 'nullable',
			'admiral' => 'nullable',
			'steward' => 'nullable'
        ]);
        Realm::where('realm_id', $id)->update($data);
        return redirect('/realms/'.$id.'/edit')->with('message', 'Updated');
    }
	
    //count citizens
    public function countCitizens($id)
    {
        $citizencount = Citizen::where('realm', $id)->count();
        return $citizencount;
    }	
	
    //count guilds
    public function countGuilds($id)
    {
        $guildcount = Guild::where('realm', $id)->count();
        return $guildcount;
    }	
	
}
