<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Dynasty;
use App\User;
use App\Chronicle;
use App\Place;
use App\Realm;
use App\Person;

class ChronicleController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main culture map
    public function index(Request $request)
    {            	
		
		//user id
		$user = auth()->user();
		$user_id = $user->id;
		//dynasty count
		$dynasty_count = Dynasty::where('dynasty_owner', $user_id)->count();
		if ($dynasty_count >=1){
			//dynasty data
			$dynasty = Dynasty::where('dynasty_owner',$user_id)->firstOrFail();	
			$dynasty_id = $dynasty->dynasty_id;	
			//filter
			$filtertype = $request->query('filter');
			//all filter
			if ($filtertype =="all"){
				$chroniclecount = Chronicle::where('dynasty',$dynasty_id)->count();
				if ($chroniclecount >=1){
				$chronicles = Chronicle::with('dynasties','regions','places','realms','belligerents','guilds')->where('dynasty',$dynasty_id)->paginate(50);
				}
				else {
					$chronicles =[];
				}			
			}
			//battles filter
			elseif ($filtertype =="battles"){
				$chroniclecount = Chronicle::where('dynasty',$dynasty_id)->count();
				if ($chroniclecount >=1){
				$chronicles = Chronicle::with('dynasties','regions','places','realms','belligerents','guilds')->where('dynasty',$dynasty_id)->paginate(50);
				}
				else {
					$chronicles =[];
				}				
			}
			//realms filter
			elseif ($filtertype =="realms"){
				$chroniclecount = Chronicle::where('dynasty',$dynasty_id)->count();
				if ($chroniclecount >=1){
				$chronicles = Chronicle::with('dynasties','regions','places','realms','belligerents','guilds')->where('dynasty',$dynasty_id)->paginate(50);
				}
				else {
					$chronicles =[];
				}				
			}
			//regions filter
			elseif ($filtertype =="regions"){
				$chroniclecount = Chronicle::where('dynasty',$dynasty_id)->count();
				if ($chroniclecount >=1){
				$chronicles = Chronicle::with('dynasties','regions','places','realms','belligerents','guilds')->where('dynasty',$dynasty_id)->paginate(50);
				}
				else {
					$chronicles =[];
				}				
			}
			//places filter
			elseif ($filtertype =="places"){
				$chroniclecount = Chronicle::where('dynasty',$dynasty_id)->count();
				if ($chroniclecount >=1){
				$chronicles = Chronicle::with('dynasties','regions','places','realms','belligerents','guilds')->where('dynasty',$dynasty_id)->paginate(50);
				}
				else {
					$chronicles =[];
				}				
			}
			//guilds filter
			elseif ($filtertype =="guilds"){
				$chroniclecount = Chronicle::where('dynasty',$dynasty_id)->count();
				if ($chroniclecount >=1){
				$chronicles = Chronicle::with('dynasties','regions','places','realms','belligerents','guilds')->where('dynasty',$dynasty_id)->paginate(50);
				}
				else {
					$chronicles =[];
				}				
			}
			//all filter
			else {
				$chroniclecount = Chronicle::where('dynasty',$dynasty_id)->count();
				if ($chroniclecount >=1){
				$chronicles = Chronicle::with('dynasties','regions','places','realms','belligerents','guilds')->where('dynasty',$dynasty_id)->paginate(50);
				}
				else {
					$chronicles =[];
				}				
			}			
		}
		//none
		else {
			$chroniclecount =0;
			$chronicles =[];
		}		
		//return view	
		return view('chronicles.index', compact('chroniclecount'));        
	}
	
	//charts main
    public function charts()
    {  
		
		$realm_count = Place::with('realms')->distinct('realm')->count();
		$all_places_count = Place::count();

		$max_count = Realm::withCount('places')->where('realm_id', '>=', 2)->orderBy('places_count','DESC')->orderBy('realm_name','ASC')->having('places_count','>=',1)->take(1)->get();
		$max_places = $max_count[0]->places_count;
		
		$realmdata = Realm::withCount('places')->where('realm_id', '>=', 2)->orderBy('places_count','DESC')->orderBy('realm_name','ASC')->having('places_count','>=',1)->get();
		$inc =1;
		foreach($realmdata as $realm){
			$realm->realm_y = 50 * $inc;
			$realm->realm_w = 200 + (round($realm->places_count / ($max_places / 1700)));
			$realm->mod = $inc % 2;
			$realm->inc = $inc;
			$inc++;
		}

		return view('chronicles.charts', compact('realm_count','realmdata')); 		

	}

	//charts
    public function gold()
    {  
		
		$maxgold = DB::table('people')->max('gold');
		if($maxgold ==0){
			$maxgold =1;
		}		
		$persondata = Person::where('person_id', '>', 2)->orderBy('gold','DESC')->orderBy('person_name','ASC')->take(50)->get();
		$inc =1;
		foreach($persondata as $person){
			$person->person_y = 50 * $inc;

			$person->person_w = round($person->gold / ($maxgold / 1700));
			$person->mod = $inc % 2;
			$person->inc = $inc;
			$inc++;
		}

		return view('chronicles.gold', compact('persondata')); 		

	}

	//charts
    public function renown()
    {  
		
		$maxgold = DB::table('people')->max('renown');	
		if($maxgold ==0){
			$maxgold =1;
		}		
		$persondata = Person::where('person_id', '>', 2)->orderBy('renown','DESC')->orderBy('person_name','ASC')->take(50)->get();
		$inc =1;
		foreach($persondata as $person){
			$person->person_y = 50 * $inc;
			$person->person_w = round($person->gold / ($maxgold / 1700));
			$person->mod = $inc % 2;
			$person->inc = $inc;
			$inc++;
		}

		return view('chronicles.renown', compact('persondata')); 		

	}

	//charts
    public function piety()
    {  
		
		$maxgold = DB::table('people')->max('piety');
		if($maxgold ==0){
			$maxgold =1;
		}			
		$persondata = Person::where('person_id', '>', 2)->orderBy('piety','DESC')->orderBy('person_name','ASC')->take(50)->get();
		$inc =1;
		foreach($persondata as $person){
			$person->person_y = 50 * $inc;
			$person->person_w = round($person->gold / ($maxgold / 1700));
			$person->mod = $inc % 2;
			$person->inc = $inc;
			$inc++;
		}

		return view('chronicles.piety', compact('persondata')); 		

	}

	//charts
    public function population()
    {  
		
		$maxpop = DB::table('places')->max('population');
		if($maxpop ==0){
			$maxpop =1;
		}			
		$placedata = Place::orderBy('population','DESC')->orderBy('place_name','ASC')->take(50)->get();
		$inc =1;
		foreach($placedata as $place){
			$place->place_y = 50 * $inc;
			$place->place_w = round($place->population / ($maxpop / 1700));
			$place->mod = $inc % 2;
			$place->inc = $inc;
			$inc++;
		}

		return view('chronicles.population', compact('placedata')); 		

	}

	//charts
    public function agriculture()
    {  
		
		$maxpop = DB::table('places')->max('agr');
		if($maxpop ==0){
			$maxpop =1;
		}			
		$placedata = Place::orderBy('agr','DESC')->orderBy('place_name','ASC')->take(50)->get();
		$inc =1;
		foreach($placedata as $place){
			$place->place_y = 50 * $inc;
			$place->place_w = round($place->agr / ($maxpop / 1700));
			$place->mod = $inc % 2;
			$place->inc = $inc;
			$inc++;
		}

		return view('chronicles.agriculture', compact('placedata')); 		

	}

	//charts
    public function commerce()
    {  
		
		$maxpop = DB::table('places')->max('com');
		if($maxpop ==0){
			$maxpop =1;
		}			
		$placedata = Place::orderBy('com','DESC')->orderBy('place_name','ASC')->take(50)->get();
		$inc =1;
		foreach($placedata as $place){
			$place->place_y = 50 * $inc;
			$place->place_w = round($place->com / ($maxpop / 1700));
			$place->mod = $inc % 2;
			$place->inc = $inc;
			$inc++;
		}

		return view('chronicles.commerce', compact('placedata')); 		

	}

	//charts
    public function defense()
    {  
		
		$maxpop = DB::table('places')->max('def');
		if($maxpop ==0){
			$maxpop =1;
		}			
		$placedata = Place::orderBy('def','DESC')->orderBy('place_name','ASC')->take(50)->get();
		$inc =1;
		foreach($placedata as $place){
			$place->place_y = 50 * $inc;
			$place->place_w = round($place->def / ($maxpop / 1700));
			$place->mod = $inc % 2;
			$place->inc = $inc;
			$inc++;
		}

		return view('chronicles.defense', compact('placedata')); 		

	}


}
