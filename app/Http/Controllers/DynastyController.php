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
use Illuminate\Support\Arr;

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
		$dynastydata = Dynasty::with('cultures')->orderBy('dynasty_name', 'ASC')->paginate(50);
		$user = auth()->user();
		$dynastycount = Dynasty::with('cultures')->count();
		$ownercount = $this->ownercount();
		return view('dynasty.index', compact('dynastydata','user','ownercount','dynastycount'));        
    }
	
	//show
    public function show($id)
    {       
        $dynastydata = Dynasty::where('dynasty_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('dynasty.show', compact('dynastydata','user'));        
    }
	
	//owner check
	public function ownercheck($id)
	{
		$user = auth()->user();
		$dynasty_owner_check = Dynasty::where('dynasty_id', $id)->firstOrFail();
		$user_id = $user->id;
		$owner_id = $dynasty_owner_check->dynasty_owner;
		if ($user_id == $owner_id)
		{
			return $ownercheck =true;
		}
		else {
			$admincheck = $user->admin;
			if ($admincheck ==1){
				return $ownercheck =true;
			}
			else {
				return $ownercheck =false;
			}		
		}
	}
	
	//owner count
	public function ownercount()
	{
		$user = auth()->user();
		$user_id = $user->id;	
		$dynasty_owner_count = Dynasty::where('dynasty_owner', $user_id)->count();
		return $dynasty_owner_count;
	}
	
    //update function
    public function update(Request $request, $id)
    {
		$ownercheck = $this->ownercheck($id);
		if ($ownercheck ==true)
		{
			$data = $request->validate([
				'dynasty_description' => 'nullable'        
			]);
			Dynasty::where('dynasty_id', $id)->update($data);
			return redirect('/dynasty/'.$id.'/edit')->with('message', 'Updated');			
		}
		else 
		{
			return redirect('/home')->with('message', 'Not allowed');
		}

    }
	
	//edit form
    public function edit($id)
    {       
        $ownercheck = $this->ownercheck($id);
		if ($ownercheck ==true)
		{
		$dynastydata = Dynasty::where('dynasty_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('dynasty.edit', compact('dynastydata','user')); 
		}
		else 
		{
			return redirect('/home')->with('message', 'Not allowed');
		}		
    }
	
	//delete function
    public function destroy($id)
    {
 		$ownercheck = $this->ownercheck($id);
		if ($ownercheck ==true)
		{
			$dynasty = Dynasty::findOrFail($id);
			$dynasty->delete();    
			return redirect('/dynasty')->with('message', 'Removed');
		}
		else {
			return redirect('/home')->with('message', 'Not allowed');
		}
    }

    //create form
    public function create(Request $request)
    {      
        $ownercount = $this->ownercount();

		//not allowed
		if ($ownercount >=1){
			return redirect('/home')->with('message', 'Not allowed');
		}
		//create allowed
		else {
			//fetch
			$color = $request->query('color');
			$emblem = $request->query('emblem');
			//back colors
			$back_colors = $this->back_colors();
			//color key
			$color_no = array_search($color, array_keys($back_colors));
			//check if exist
			if ($color_no ==false){
				$color_keys =0;
				$color ="back_black";
			}
			else {
				$color_keys = $color_no;
			}
			$color_array_count = count($back_colors);
			$color_key_next = $color_keys + 1;
			$color_key_prev = $color_keys - 1;
			//color next 
			if ($color_key_next ==$color_array_count ){
				$color_key_next =0;
			}
			else {
				$color_key_next = $color_key_next;
			}
			//color previous
			if ($color_key_prev <0){
				$color_key_prev = $color_array_count - 1;
			}
			else {
				$color_key_prev = $color_key_prev;
			}
			//array keys
			$a_keys = array_values($back_colors);
			//next color
			$nextcolor = $a_keys[$color_key_next]; 
			//previous color
			$prevcolor = $a_keys[$color_key_prev]; 		
			//emblem key
			$emblen_no = $this->emblemkey($color_keys,$emblem);
			//check if exist		
			if (is_int($emblen_no) || $emblen_no ==0){
				$emblem_keys = $emblen_no;
				$color = $color;
				$emblem = $this->emblemvalue($emblem_keys,$color_keys);
			}
			else {
				$color ="back_black";
				$emblem_keys =0;
				$emblem ="greylight_cross";
			}
			$emblem_array_count = $this->emblemcount($color_keys);
			$emblem_key_next = $emblem_keys + 1;
			$emblem_key_prev = $emblem_keys - 1;
			//emblem next 
			if ($emblem_key_next ==$emblem_array_count){
				$emblem_key_next =0;
			}
			else {
				$emblem_key_next = $emblem_key_next;
			}
			//emblem previous
			if ($emblem_key_prev <0){
				$emblem_key_prev = $emblem_array_count - 1;
			}
			else {
				$emblem_key_prev = $emblem_key_prev;
			}
			//next emblem
			$nextemblem = $this->emblemvalue($emblem_key_next,$color_keys);
			//previous emblem
			$prevemblem = $this->emblemvalue($emblem_key_prev,$color_keys);
			//first and last emblem when changing color
			$firstemblem = $this->emblemvalue(0,$color_key_next);
			$lastemblem = $this->emblemvalue(0,$color_key_prev);
			//new dynasty
			$dynasty = new Dynasty();
			$place = Place::all();
			$region = Region::all();
			$culture = Culture::orderBy('culture_name', 'ASC')->get();
			$users = User::all();   
			return view('dynasty.create', compact('color_keys','emblem_keys','emblen_no','nextcolor','dynasty','place','region','culture','users','color','nextcolor','prevcolor','emblem','nextemblem','prevemblem','firstemblem','lastemblem'));    			
		}
    
    }
	
	//back colors
	public function back_colors()
	{
		$back_colors = array(
			"back_black"=>"back_black", 
			"back_darkblue"=>"back_darkblue", 
			"back_gold"=>"back_gold", 
			"back_green"=>"back_green", 
			"back_greyblue"=>"back_greyblue", 
			"back_greylight"=>"back_greylight", 
			"back_ochre"=>"back_ochre", 
			"back_purple"=>"back_purple"
		);	
		return $back_colors;
	}
	
	//available emblems
	public function available_emblems($color_keys)
	{
		//dark blue
		if($color_keys ==1){
			$available_emblems = array(
			//red
			"ochre_chalice"=>"ochre_chalice","ochre_cross"=>"ochre_cross","ochre_db1"=>"ochre_db1","ochre_fleur"=>"ochre_fleur","ochre_hb3"=>"ochre_hb3","ochre_lion"=>"ochre_lion","ochre_mitre"=>"ochre_mitre","ochre_vb4"=>"ochre_vb4","ochre_vh"=>"ochre_vh",
			//gold
			"gold_chalice"=>"gold_chalice","gold_cross"=>"gold_cross","gold_crown"=>"gold_crown","gold_db1"=>"gold_db1","gold_eagle"=>"gold_eagle","gold_fleur"=>"gold_fleur","gold_hb3"=>"gold_hb3","gold_key"=>"gold_key","gold_lion"=>"gold_lion","gold_mitre"=>"gold_mitre","gold_vb4"=>"gold_vb4","gold_vh"=>"gold_vh",			
			//white
			"greylight_cross"=>"greylight_cross","greylight_db1"=>"greylight_db1","greylight_fleur"=>"greylight_fleur","greylight_hb3"=>"greylight_hb3","greylight_horse"=>"greylight_horse","greylight_lion"=>"greylight_lion","greylight_mitre"=>"greylight_mitre","greylight_vb4"=>"greylight_vb4","greylight_vh"=>"greylight_vh"
			);
		}
		//gold
		elseif($color_keys ==2){
			$available_emblems = array(
			//black
			"black_boar"=>"black_boar","black_bow"=>"black_bow","black_chalice"=>"black_chalice","black_cross"=>"black_cross","black_crown"=>"black_crown","black_db1"=>"black_db1","black_eagle"=>"black_eagle","black_fish"=>"black_fish","black_fleur"=>"black_fleur","black_hb3"=>"black_hb3","black_heaume"=>"black_heaume","black_helmet"=>"black_helmet","black_horse"=>"black_horse","black_key"=>"black_key","black_lion"=>"black_lion","black_mitre"=>"black_mitre","black_sword"=>"black_sword","black_vb4"=>"black_vb4","black_vh"=>"black_vh",
			//red
			"ochre_chalice"=>"ochre_chalice","ochre_cross"=>"ochre_cross","ochre_db1"=>"ochre_db1","ochre_fleur"=>"ochre_fleur","ochre_hb3"=>"ochre_hb3","ochre_lion"=>"ochre_lion","ochre_mitre"=>"ochre_mitre","ochre_vb4"=>"ochre_vb4","ochre_vh"=>"ochre_vh",
			//brown
			"brown_boar"=>"brown_boar","brown_chalice"=>"brown_chalice","brown_horse"=>"brown_horse",
			//dark grey
			"greydark_heaume"=>"greydark_heaume","greydark_helmet"=>"greydark_helmet","greydark_sword"=>"greydark_sword",
			//light blue
			"greyblue_cross"=>"greyblue_cross","greyblue_db1"=>"greyblue_db1","greyblue_fish"=>"greyblue_fish","greyblue_fleur"=>"greyblue_fleur","greyblue_hb3"=>"greyblue_hb3","greyblue_vb4"=>"greyblue_vb4","greyblue_vh"=>"greyblue_vh",
			//green
			"green_cross"=>"green_cross","green_db1"=>"green_db1","green_hb3"=>"green_hb3","green_vb4"=>"green_vb4","green_vh"=>"green_vh",
			//dark blue
			"darkblue_cross"=>"darkblue_cross","darkblue_db1"=>"darkblue_db1","darkblue_hb3"=>"darkblue_hb3","darkblue_vb4"=>"darkblue_vb4","darkblue_vh"=>"darkblue_vh",
			//purple
			"purple_cross"=>"purple_cross","purple_db1"=>"purple_db1","purple_hb3"=>"purple_hb3","purple_vb4"=>"purple_vb4","purple_vh"=>"purple_vh",
			//white
			"greylight_cross"=>"greylight_cross","greylight_db1"=>"greylight_db1","greylight_fleur"=>"greylight_fleur","greylight_hb3"=>"greylight_hb3","greylight_horse"=>"greylight_horse","greylight_lion"=>"greylight_lion","greylight_mitre"=>"greylight_mitre","greylight_vb4"=>"greylight_vb4","greylight_vh"=>"greylight_vh"
			);
		}
		//green
		elseif($color_keys ==3){
			$available_emblems = array(
			//black
			"black_boar"=>"black_boar","black_bow"=>"black_bow","black_chalice"=>"black_chalice","black_cross"=>"black_cross","black_crown"=>"black_crown","black_db1"=>"black_db1","black_eagle"=>"black_eagle","black_fish"=>"black_fish","black_fleur"=>"black_fleur","black_hb3"=>"black_hb3","black_heaume"=>"black_heaume","black_helmet"=>"black_helmet","black_horse"=>"black_horse","black_key"=>"black_key","black_lion"=>"black_lion","black_mitre"=>"black_mitre","black_sword"=>"black_sword","black_vb4"=>"black_vb4","black_vh"=>"black_vh",
			//red
			"ochre_chalice"=>"ochre_chalice","ochre_cross"=>"ochre_cross","ochre_db1"=>"ochre_db1","ochre_fleur"=>"ochre_fleur","ochre_hb3"=>"ochre_hb3","ochre_lion"=>"ochre_lion","ochre_mitre"=>"ochre_mitre","ochre_vb4"=>"ochre_vb4","ochre_vh"=>"ochre_vh",
			//brown
			"brown_boar"=>"brown_boar","brown_chalice"=>"brown_chalice","brown_horse"=>"brown_horse",
			//dark grey
			"greydark_heaume"=>"greydark_heaume","greydark_helmet"=>"greydark_helmet","greydark_sword"=>"greydark_sword",
			//gold
			"gold_chalice"=>"gold_chalice","gold_cross"=>"gold_cross","gold_crown"=>"gold_crown","gold_db1"=>"gold_db1","gold_eagle"=>"gold_eagle","gold_fleur"=>"gold_fleur","gold_hb3"=>"gold_hb3","gold_key"=>"gold_key","gold_lion"=>"gold_lion","gold_mitre"=>"gold_mitre","gold_vb4"=>"gold_vb4","gold_vh"=>"gold_vh",
			//dark blue
			"darkblue_cross"=>"darkblue_cross","darkblue_db1"=>"darkblue_db1","darkblue_hb3"=>"darkblue_hb3","darkblue_vb4"=>"darkblue_vb4","darkblue_vh"=>"darkblue_vh",
			//purple
			"purple_cross"=>"purple_cross","purple_db1"=>"purple_db1","purple_hb3"=>"purple_hb3","purple_vb4"=>"purple_vb4","purple_vh"=>"purple_vh",
			//white
			"greylight_cross"=>"greylight_cross","greylight_db1"=>"greylight_db1","greylight_fleur"=>"greylight_fleur","greylight_hb3"=>"greylight_hb3","greylight_horse"=>"greylight_horse","greylight_lion"=>"greylight_lion","greylight_mitre"=>"greylight_mitre","greylight_vb4"=>"greylight_vb4","greylight_vh"=>"greylight_vh"
			);
		}
		//light blue
		elseif($color_keys ==4){
			$available_emblems = array(
			//black
			"black_boar"=>"black_boar","black_bow"=>"black_bow","black_chalice"=>"black_chalice","black_cross"=>"black_cross","black_crown"=>"black_crown","black_db1"=>"black_db1","black_eagle"=>"black_eagle","black_fish"=>"black_fish","black_fleur"=>"black_fleur","black_hb3"=>"black_hb3","black_heaume"=>"black_heaume","black_helmet"=>"black_helmet","black_horse"=>"black_horse","black_key"=>"black_key","black_lion"=>"black_lion","black_mitre"=>"black_mitre","black_sword"=>"black_sword","black_vb4"=>"black_vb4","black_vh"=>"black_vh",
			//red
			"ochre_chalice"=>"ochre_chalice","ochre_cross"=>"ochre_cross","ochre_db1"=>"ochre_db1","ochre_fleur"=>"ochre_fleur","ochre_hb3"=>"ochre_hb3","ochre_lion"=>"ochre_lion","ochre_mitre"=>"ochre_mitre","ochre_vb4"=>"ochre_vb4","ochre_vh"=>"ochre_vh",
			//green
			"green_cross"=>"green_cross","green_db1"=>"green_db1","green_hb3"=>"green_hb3","green_vb4"=>"green_vb4","green_vh"=>"green_vh",
			//brown
			"brown_boar"=>"brown_boar","brown_chalice"=>"brown_chalice","brown_horse"=>"brown_horse"
			);
		}
		//white
		elseif($color_keys ==5){
			$available_emblems = array(
			//black
			"black_boar"=>"black_boar","black_bow"=>"black_bow","black_chalice"=>"black_chalice","black_cross"=>"black_cross","black_crown"=>"black_crown","black_db1"=>"black_db1","black_eagle"=>"black_eagle","black_fish"=>"black_fish","black_fleur"=>"black_fleur","black_hb3"=>"black_hb3","black_heaume"=>"black_heaume","black_helmet"=>"black_helmet","black_horse"=>"black_horse","black_key"=>"black_key","black_lion"=>"black_lion","black_mitre"=>"black_mitre","black_sword"=>"black_sword","black_vb4"=>"black_vb4","black_vh"=>"black_vh",
			//brown
			"brown_boar"=>"brown_boar","brown_chalice"=>"brown_chalice","brown_horse"=>"brown_horse",
			//dark grey
			"greydark_heaume"=>"greydark_heaume","greydark_helmet"=>"greydark_helmet","greydark_sword"=>"greydark_sword",
			//light blue
			"greyblue_cross"=>"greyblue_cross","greyblue_db1"=>"greyblue_db1","greyblue_fish"=>"greyblue_fish","greyblue_fleur"=>"greyblue_fleur","greyblue_hb3"=>"greyblue_hb3","greyblue_vb4"=>"greyblue_vb4","greyblue_vh"=>"greyblue_vh",
			//red
			"ochre_chalice"=>"ochre_chalice","ochre_cross"=>"ochre_cross","ochre_db1"=>"ochre_db1","ochre_fleur"=>"ochre_fleur","ochre_hb3"=>"ochre_hb3","ochre_lion"=>"ochre_lion","ochre_mitre"=>"ochre_mitre","ochre_vb4"=>"ochre_vb4","ochre_vh"=>"ochre_vh",
			//dark blue
			"darkblue_cross"=>"darkblue_cross","darkblue_db1"=>"darkblue_db1","darkblue_hb3"=>"darkblue_hb3","darkblue_vb4"=>"darkblue_vb4","darkblue_vh"=>"darkblue_vh",
			//green
			"green_cross"=>"green_cross","green_db1"=>"green_db1","green_hb3"=>"green_hb3","green_vb4"=>"green_vb4","green_vh"=>"green_vh",
			//purple
			"purple_cross"=>"purple_cross","purple_db1"=>"purple_db1","purple_hb3"=>"purple_hb3","purple_vb4"=>"purple_vb4","purple_vh"=>"purple_vh",
			//gold
			"gold_chalice"=>"gold_chalice","gold_cross"=>"gold_cross","gold_crown"=>"gold_crown","gold_db1"=>"gold_db1","gold_eagle"=>"gold_eagle","gold_fleur"=>"gold_fleur","gold_hb3"=>"gold_hb3","gold_key"=>"gold_key","gold_lion"=>"gold_lion","gold_mitre"=>"gold_mitre","gold_vb4"=>"gold_vb4","gold_vh"=>"gold_vh"
			);
		}
		//red
		elseif($color_keys ==6){
			$available_emblems = array(
			//black
			"black_boar"=>"black_boar","black_bow"=>"black_bow","black_chalice"=>"black_chalice","black_cross"=>"black_cross","black_crown"=>"black_crown","black_db1"=>"black_db1","black_eagle"=>"black_eagle","black_fish"=>"black_fish","black_fleur"=>"black_fleur","black_hb3"=>"black_hb3","black_heaume"=>"black_heaume","black_helmet"=>"black_helmet","black_horse"=>"black_horse","black_key"=>"black_key","black_lion"=>"black_lion","black_mitre"=>"black_mitre","black_sword"=>"black_sword","black_vb4"=>"black_vb4","black_vh"=>"black_vh",
			//brown
			"brown_boar"=>"brown_boar","brown_chalice"=>"brown_chalice","brown_horse"=>"brown_horse",
			//dark grey
			"greydark_heaume"=>"greydark_heaume","greydark_helmet"=>"greydark_helmet","greydark_sword"=>"greydark_sword",
			//gold
			"gold_chalice"=>"gold_chalice","gold_cross"=>"gold_cross","gold_crown"=>"gold_crown","gold_db1"=>"gold_db1","gold_eagle"=>"gold_eagle","gold_fleur"=>"gold_fleur","gold_hb3"=>"gold_hb3","gold_key"=>"gold_key","gold_lion"=>"gold_lion","gold_mitre"=>"gold_mitre","gold_vb4"=>"gold_vb4","gold_vh"=>"gold_vh",
			//green
			"green_cross"=>"green_cross","green_db1"=>"green_db1","green_hb3"=>"green_hb3","green_vb4"=>"green_vb4","green_vh"=>"green_vh",
			//dark blue
			"darkblue_cross"=>"darkblue_cross","darkblue_db1"=>"darkblue_db1","darkblue_hb3"=>"darkblue_hb3","darkblue_vb4"=>"darkblue_vb4","darkblue_vh"=>"darkblue_vh",
			//white
			"greylight_cross"=>"greylight_cross","greylight_db1"=>"greylight_db1","greylight_fleur"=>"greylight_fleur","greylight_hb3"=>"greylight_hb3","greylight_horse"=>"greylight_horse","greylight_lion"=>"greylight_lion","greylight_mitre"=>"greylight_mitre","greylight_vb4"=>"greylight_vb4","greylight_vh"=>"greylight_vh"
			);
		}
		//purple
		elseif($color_keys ==7){
			$available_emblems = array(
			//black
			"black_boar"=>"black_boar","black_bow"=>"black_bow","black_chalice"=>"black_chalice","black_cross"=>"black_cross","black_crown"=>"black_crown","black_db1"=>"black_db1","black_eagle"=>"black_eagle","black_fish"=>"black_fish","black_fleur"=>"black_fleur","black_hb3"=>"black_hb3","black_heaume"=>"black_heaume","black_helmet"=>"black_helmet","black_horse"=>"black_horse","black_key"=>"black_key","black_lion"=>"black_lion","black_mitre"=>"black_mitre","black_sword"=>"black_sword","black_vb4"=>"black_vb4","black_vh"=>"black_vh",
			//brown
			"brown_boar"=>"brown_boar","brown_chalice"=>"brown_chalice","brown_horse"=>"brown_horse",
			//dark grey
			"greydark_heaume"=>"greydark_heaume","greydark_helmet"=>"greydark_helmet","greydark_sword"=>"greydark_sword",
			//gold
			"gold_chalice"=>"gold_chalice","gold_cross"=>"gold_cross","gold_crown"=>"gold_crown","gold_db1"=>"gold_db1","gold_eagle"=>"gold_eagle","gold_fleur"=>"gold_fleur","gold_hb3"=>"gold_hb3","gold_key"=>"gold_key","gold_lion"=>"gold_lion","gold_mitre"=>"gold_mitre","gold_vb4"=>"gold_vb4","gold_vh"=>"gold_vh",
			//green
			"green_cross"=>"green_cross","green_db1"=>"green_db1","green_hb3"=>"green_hb3","green_vb4"=>"green_vb4","green_vh"=>"green_vh",
			//white
			"greylight_cross"=>"greylight_cross","greylight_db1"=>"greylight_db1","greylight_fleur"=>"greylight_fleur","greylight_hb3"=>"greylight_hb3","greylight_horse"=>"greylight_horse","greylight_lion"=>"greylight_lion","greylight_mitre"=>"greylight_mitre","greylight_vb4"=>"greylight_vb4","greylight_vh"=>"greylight_vh"
			);
		}
		//black
		else {
			$available_emblems = array(
			//gold
			"gold_chalice"=>"gold_chalice","gold_cross"=>"gold_cross","gold_crown"=>"gold_crown","gold_db1"=>"gold_db1","gold_eagle"=>"gold_eagle","gold_fleur"=>"gold_fleur","gold_hb3"=>"gold_hb3","gold_key"=>"gold_key","gold_lion"=>"gold_lion","gold_mitre"=>"gold_mitre","gold_vb4"=>"gold_vb4","gold_vh"=>"gold_vh",
			//light blue
			"greyblue_cross"=>"greyblue_cross","greyblue_db1"=>"greyblue_db1","greyblue_fish"=>"greyblue_fish","greyblue_fleur"=>"greyblue_fleur","greyblue_hb3"=>"greyblue_hb3","greyblue_vb4"=>"greyblue_vb4","greyblue_vh"=>"greyblue_vh",
			//red
			"ochre_chalice"=>"ochre_chalice","ochre_cross"=>"ochre_cross","ochre_db1"=>"ochre_db1","ochre_fleur"=>"ochre_fleur","ochre_hb3"=>"ochre_hb3","ochre_lion"=>"ochre_lion","ochre_mitre"=>"ochre_mitre","ochre_vb4"=>"ochre_vb4","ochre_vh"=>"ochre_vh",
			//green
			"green_cross"=>"green_cross","green_db1"=>"green_db1","green_hb3"=>"green_hb3","green_vb4"=>"green_vb4","green_vh"=>"green_vh",
			//purple
			"purple_cross"=>"purple_cross","purple_db1"=>"purple_db1","purple_hb3"=>"purple_hb3","purple_vb4"=>"purple_vb4","purple_vh"=>"purple_vh",
			//white
			"greylight_cross"=>"greylight_cross","greylight_db1"=>"greylight_db1","greylight_fleur"=>"greylight_fleur","greylight_hb3"=>"greylight_hb3","greylight_horse"=>"greylight_horse","greylight_lion"=>"greylight_lion","greylight_mitre"=>"greylight_mitre","greylight_vb4"=>"greylight_vb4","greylight_vh"=>"greylight_vh"
			);
		}
		//return
		return $available_emblems;
	}
	
	//emblem key picker
	public function emblemkey($color_keys,$emblem){

		$available_emblems = $this->available_emblems($color_keys);
		$emblem_no = array_search($emblem, array_keys($available_emblems));
		if ($emblem_no ==false){
			$emblem_keys =999999999;
		}
		else {
			$emblem_keys = $emblem_no;
		}
		return $emblem_no;
	}
	
	//emblem value picker
	public function emblemvalue($emblemkey,$color_keys){
		$available_emblems = $this->available_emblems($color_keys);
		//array keys
		$e_keys = array_values($available_emblems);			
		$emblemvalue = $e_keys[$emblemkey]; 
		return $emblemvalue;
	}	
	
	//emblem count
	public function emblemcount($color_keys){
		$available_emblems = $this->available_emblems($color_keys);
		$emblem_array_count = count($available_emblems);
		return $emblem_array_count;
	}	
	

    //store function
    public function store()
    {     
         $ownercount = $this->ownercount();
		if ($ownercount >=1){
			return redirect('/home')->with('message', 'Not allowed');
		}
		else {

			$data = request()->validate([
				'culture' => 'required',
				'dynasty_name' => 'required|min:3',
				'dynasty_description' => 'nullable',
				'crest_back' => 'required',
				'crest_emblem' => 'required'
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
			
			$dynasty->crest_back = request('crest_back');
			$dynasty->crest_emblem = request('crest_emblem');
			
			//fetch
			$color = $dynasty->crest_back;
			$emblem = $dynasty->crest_emblem;

			//back colors
			$back_colors = $this->back_colors();
			//checking
			$color_no = array_search($color, array_keys($back_colors));
			
			//check if exist
			if ($color_no ==false){
				return redirect('/home')->with('message', 'Not allowed color'.$color);
			}
			else {
				$emblen_no = $this->emblemkey($color_no,$emblem);
				if (is_int($emblen_no) || $emblen_no ==0){
					//saving
					$dynasty->save();       
					//return
					return redirect('/dynasty')->with('message', 'Added');
				}
				else {
					return redirect('/home')->with('message', 'Not allowed emblem');
				}	
			}
		}
    }
	
}
