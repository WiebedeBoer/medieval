<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guild;
use App\GuildMember;
use App\Realm;
use App\Person;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class GuildController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main 
    public function index()
    {            	
		$guilddata = Guild::with('realms','places','masters')->orderBy('guild_name','ASC')->get();
		return view('guilds.index', compact('guilddata'));        
    }
	
	//show
    public function show($id)
    {       
        $guilddata = Guild::with('realms','places','masters')->where('guild_id', $id)->firstOrFail();
		$membercount = $this->countMembers($id);
		if ($membercount >=1){
			$members = GuildMember::with('members')->where('guild', $id)->get();
		}
		else {
			$members =[];
		}
		$user = auth()->user();
		return view('guilds.show', compact('guilddata','membercount','members','user'));        
    }	
	
	//edit
    public function edit($id)
    {       
        $guilddata = Guild::with('realms','places','masters')->where('guild_id', $id)->firstOrFail();
		$membercount = $this->countMembers($id);
		if ($membercount >=1){
			$members = GuildMember::with('members')->where('guild', $id)->get();
		}
		else {
			$members =[];
		}
		$user = auth()->user();
		return view('guilds.edit', compact('guilddata','membercount','members','user'));         
    }
	
    //update function
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'treasury' => 'nullable', 
			'banner' => 'nullable',
			'master' => 'nullable'
        ]);
        Guild::where('guild_id', $id)->update($data);
        return redirect('/guilds/'.$id)->with('message', 'Updated');
    }
	
    //create form
    public function create(Request $request,$id)
    {  
		$user = auth()->user();
		$place = Place::with('regions')->where('place_id', $id)->firstOrFail();
		$realm = Culture::with('cultures','owners','dynasties','rulers','chancellors','chamberlains','marshalls','admirals','stewards','capitals')->where('realm_id', $id)->firstOrFail();
		$masters = Person::with('cultures','owners','dynasties','mothers','fathers','spouses')->where('person_id', $id)->firstOrFail();	
		return view('guilds.create', compact('place','masters','realm','user'));  	
	}

	//store function
    public function store()
    {
        $data = $request->validate([
            'guild_category' => 'nullable', 
			'banner' => 'nullable',
			'place' => 'required',
			'realm' => 'required',
			'master' => 'required'
        ]);
        //saving
		$guild = new Guild(); 
		$guild->guild_category = request('guild_category');
		$guild->banner = request('banner');
		$guild->place = request('place');
		$guild->realm = request('realm');
		$guild->master = request('master');
		$guild->save();  
		//return
        return redirect('/guilds')->with('message', 'Created');
    }
	
    //count members
    public function countMembers($id)
    {
        $membercount = GuildMember::where('guild', $id)->count();
        return $membercount;
    }	
	
	
}
