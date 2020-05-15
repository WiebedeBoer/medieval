<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Realm;
use App\Citizen;
use App\Guild;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

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
		$realmdata = Realm::with('cultures','owners','dynasties','rulers','chancellors','chamberlains','marshalls','admirals','stewards','capitals')->orderBy('realm_name','ASC')->get();
		return view('realms.index', compact('realmdata'));        
    }
	
	//show
    public function show($id)
    {       
        $realmdata = Culture::with('cultures','owners','dynasties','rulers','chancellors','chamberlains','marshalls','admirals','stewards','capitals')->where('realm_id', $id)->firstOrFail();
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
		return view('realms.show', compact('realmdata','citizencount','citizens','user','guildcount','guilds'));        
    }	
	
	//edit
    public function edit($id)
    {       
        $realmdata = Culture::with('cultures','owners','dynasties','rulers','chancellors','chamberlains','marshalls','admirals','stewards','capitals')->where('realm_id', $id)->firstOrFail();
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
		return view('realms.edit', compact('realmdata','citizencount','citizens','user','guildcount','guilds'));        
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
        return redirect('/realms/'.$id)->with('message', 'Updated');
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
