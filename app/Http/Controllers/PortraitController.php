<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Dynasty;
use App\User;
use App\Culture;
use App\Person;

class PortraitController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	//portrait count
	public function charactercount()
	{
		$user = auth()->user();
		$user_id = $user->id;	
		$portrait_count = Person::where('owner', $user_id)->where('alive',1)->count();
		return $portrait_count;
	}	
	
	//dynasty count
	public function dynastycount()
	{
		$user = auth()->user();
		$user_id = $user->id;	
		$dynasty_count = Dynasty::where('dynasty_owner', $user_id)->count();
		return $dynasty_count;
	}
	
	
    //create form
    public function create(Request $request)
    {      
        $charactercount = $this->charactercount();
		$dynastycount = $this->dynastycount();

		//not allowed
		if ($charactercount >=4 || $dynastycount <1){
			return redirect('/home')->with('message', 'Not allowed1');
		}
		//create allowed
		else {
			//fetch
			$color = $request->query('haircolor');
			$portrait = $request->query('portrait');
			$gender = $request->query('gender');
			//user data
			$user = auth()->user();
			$user_id = $user->id;			
			//dynasty data
			$dynasty = Dynasty::where('dynasty_owner',$user_id)->firstOrFail();
			//culture
			$manor_culture = $dynasty->cultures->manorial_culture;
			$region_culture = $dynasty->cultures->warrior_culture;
			if ($region_culture =="Scandinavian" || $region_culture =="German" || $region_culture =="Anglo-Saxon" || $region_culture =="Celtic" || $region_culture =="Polish" || $region_culture =="Kievan Rus"){
				$portrait_culture ="Nordic";
			}
			else {
				if ($manor_culture =="Muslim"){
					$portrait_culture ="Muslim";
				}
				else {
					$portrait_culture ="Catholic";
				}
			}

			
			//hair colors
			$hair_colors = $this->hair_colors($portrait_culture,$gender);
			//color key
			$color_no = array_search($color, array_keys($hair_colors));
			//check if exist
			if ($color_no ==false){
				$color_keys =0;
				$color ="dark";
			}
			else {
				$color_keys = $color_no;
			}
			$color_array_count = count($hair_colors);
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
			$a_keys = array_values($hair_colors);
			//next color
			$nextcolor = $a_keys[$color_key_next]; 
			//previous color
			$prevcolor = $a_keys[$color_key_prev]; 		
			//portrait key
			$emblen_no = $this->portraitkey($color_keys,$portrait,$portrait_culture,$gender);
			//check if exist		
			if (is_int($emblen_no) || $emblen_no ==0){
				$portrait_keys = $emblen_no;
				$color = $color;
				$portrait = $this->portraitvalue($portrait_keys,$color_keys,$portrait_culture,$gender);
			}
			else {
				$color ="dark";
				$portrait_keys =0;
				$portrait ="f001_dark";
			}
			$portrait_array_count = $this->portraitcount($color_keys,$portrait_culture,$gender);
			$portrait_key_next = $portrait_keys + 1;
			$portrait_key_prev = $portrait_keys - 1;
			//portrait next 
			if ($portrait_key_next ==$portrait_array_count){
				$portrait_key_next =0;
			}
			else {
				$portrait_key_next = $portrait_key_next;
			}
			//portrait previous
			if ($portrait_key_prev <0){
				$portrait_key_prev = $portrait_array_count - 1;
			}
			else {
				$portrait_key_prev = $portrait_key_prev;
			}
			//next portrait
			$nextportrait = $this->portraitvalue($portrait_key_next,$color_keys,$portrait_culture,$gender);
			//previous portrait
			$prevportrait = $this->portraitvalue($portrait_key_prev,$color_keys,$portrait_culture,$gender);
			//first and last portrait when changing color
			$firstportrait = $this->portraitvalue(0,$color_key_next,$portrait_culture,$gender);
			$lastportrait = $this->portraitvalue(0,$color_key_prev,$portrait_culture,$gender); 
			return view('portraits.create', compact('gender','dynasty','portrait_culture','users','color','nextcolor','prevcolor','portrait','nextportrait','prevportrait','firstportrait','lastportrait'));    			
		}
    
    }

	//hair colors
	public function hair_colors($portrait_culture,$gender)
	{

		//arabic
		if($portrait_culture =="Muslim")
		{
			if($gender =="male")
			{
				$hair_colors = array(
					"dark"=>"dark",
					"brown"=>"brown"
				);				
			}
			else 
			{
				$hair_colors = array(
					"dark"=>"dark", 
					"brown"=>"brown",
					"red"=>"red"
				);				
			}
		}
		//nordic
		elseif ($portrait_culture =="Nordic") 
		{
			if($gender =="female")
			{
				$hair_colors = array( 
					"brown"=>"brown", 
					"blonde"=>"blonde", 
					"red"=>"red"
				);				
			}
			else 
			{
				$hair_colors = array(
					"brown"=>"brown", 
					"blonde"=>"blonde", 
					"red"=>"red"
				);			
			}			
		}				
		//southern european
		else 
		{
			if($gender =="female")
			{
				$hair_colors = array(
					"dark"=>"dark", 
					"brown"=>"brown", 
					"blonde"=>"blonde", 
					"red"=>"red"
				);				
			}
			else 
			{
				$hair_colors = array(
					"dark"=>"dark", 
					"brown"=>"brown", 
					"blonde"=>"blonde",  
					"red"=>"red"
				);			
			}			
		}

		return $hair_colors;
	}

	//portrait key picker
	public function portraitkey($color_keys,$portrait,$portrait_culture,$gender){

		$available_portraits = $this->available_portraits($color_keys,$portrait_culture,$gender);
		$portrait_no = array_search($portrait, array_keys($available_portraits));
		if ($portrait_no ==false){
			$portrait_keys =999999999;
		}
		else {
			$portrait_keys = $portrait_no;
		}
		return $portrait_no;
	}
	
	//portrait value picker
	public function portraitvalue($portraitkey,$color_keys,$portrait_culture,$gender){
		$available_portraits = $this->available_portraits($color_keys,$portrait_culture,$gender);
		//array keys
		$e_keys = array_values($available_portraits);			
		$portraitvalue = $e_keys[$portraitkey]; 
		return $portraitvalue;
	}	
	
	//portrait count
	public function portraitcount($color_keys,$portrait_culture,$gender){
		$available_portraits = $this->available_portraits($color_keys,$portrait_culture,$gender);
		$portrait_array_count = count($available_portraits);
		return $portrait_array_count;
	}	
	
	//available portraits
	public function available_portraits($color_keys,$portrait_culture,$gender)
	{

		//muslim
		if($portrait_culture =="Muslim")
		{
			//male
			if($gender =="male")
			{
				//dark
				if($color_keys ==1){
					$available_portraits = array(
						"m001_dark"=>"m001_dark","m004_dark"=>"m004_dark","m007_dark"=>"m007_dark","m008_dark"=>"m008_dark","m009_dark"=>"m009_dark"
					);
				}
				//brown
				elseif($color_keys ==2){
					$available_portraits = array(
					"m004_brown"=>"m004_brown","m007_brown"=>"m007_brown"
					);
				}
			
			}
			//female
			else 
			{
				//dark
				if($color_keys ==1){
					$available_portraits = array(
						"f002_dark"=>"f002_dark","f003_dark"=>"f003_dark","f004_dark"=>"f004_dark","f005_dark"=>"f005_dark","f006_dark"=>"f006_dark","f007_dark"=>"f007_dark","f009_dark"=>"f009_dark","f011_dark"=>"f011_dark"
					);
				}
				//brown
				elseif($color_keys ==2){
					$available_portraits = array(
					"f002_brown"=>"f002_brown","f004_brown"=>"f004_brown","f005_brown"=>"f005_brown","f006_brown"=>"f006_brown","f011_brown"=>"f011_brown"
					);
				}
				//blonde
				elseif($color_keys ==3){
					$available_portraits = array(
					"f002_ashblonde"=>"f002_ashblonde","f005_ashblonde"=>"f005_ashblonde","f004_ashblonde"=>"f004_ashblonde","f011_blonde"=>"f011_blonde"
					);
				}
				//red
				else {
					$available_portraits = array(
					"f002_red"=>"f002_red","f003_red"=>"f003_red","f004_red"=>"f004_red","f005_red"=>"f005_red"
					);
				}			
			}
		}
		//nordic
		elseif($portrait_culture =="Nordic")
		{
			//female
			if($gender =="female")
			{
				//brown
				if($color_keys ==1){
					$available_portraits = array(
					"f001_brown"=>"f001_brown","f002_brown"=>"f002_brown","f004_brown"=>"f004_brown","f007_brown"=>"f007_brown","f008_brown"=>"f008_brown","f009_brown"=>"f009_brown","f010_brown"=>"f010_brown","f011_brown"=>"f011_brown","f012_brown"=>"f012_brown"
					);
				}
				//blonde
				elseif($color_keys ==2){
					$available_portraits = array(
					"f002_ashblonde"=>"f002_ashblonde","f004_ashblonde"=>"f004_ashblonde","f005_ashblonde"=>"f005_ashblonde","f008_ashblonde"=>"f008_ashblonde","f009_ashblonde"=>"f009_ashblonde","f001_blonde"=>"f001_blonde","f007_blonde"=>"f007_blonde","f008_blonde"=>"f008_blonde","f010_blonde"=>"f010_blonde","f011_blonde"=>"f011_blonde","f012_blonde"=>"f012_blonde","f008_highblonde"=>"f008_highblonde","f010_highblonde"=>"f010_highblonde"
					);
				}
				//red
				else {
					$available_portraits = array(
					"f008_strawberryblonde"=>"f008_strawberryblonde","f010_strawberryblonde"=>"f010_strawberryblonde","f001_red"=>"f001_red","f002_red"=>"f002_red","f003_red"=>"f003_red","f004_red"=>"f004_red","f005_red"=>"f005_red","f009_red"=>"f009_red","f011_red"=>"f011_red","f012_red"=>"f012_red"
					);
				}			
			}
			//male
			else 
			{

				//brown
				if($color_keys ==1){
					$available_portraits = array(
					"m002_brown"=>"m002_brown","m005_brown"=>"m005_brown","m006_brown"=>"m006_brown","m007_brown"=>"m007_brown","m011_brown"=>"m011_brown"
					);
				}
				//blonde
				elseif($color_keys ==2){
					$available_portraits = array(
					"m003_ashblonde"=>"m003_ashblonde","m004_ashblonde"=>"m004_ashblonde","m002_blonde"=>"m002_blonde","m006_blonde"=>"m006_blonde","m010_blonde"=>"m010_blonde","m012_blonde"=>"m012_blonde"
					);
				}
				//red
				else {
					$available_portraits = array(
					"m006_red"=>"m006_red"
					);
				}			
			}			
		}	
		//southern european
		else 
		{
			//female
			if($gender =="female")
			{
				//dark
				if($color_keys ==1){
					$available_portraits = array(
						"f001_dark"=>"f001_dark","f002_dark"=>"f002_dark","f003_dark"=>"f003_dark","f004_dark"=>"f004_dark","f005_dark"=>"f005_dark","f006_dark"=>"f006_dark","f007_dark"=>"f007_dark","f009_dark"=>"f009_dark","f011_dark"=>"f011_dark"
					);
				}
				//brown
				elseif($color_keys ==2){
					$available_portraits = array(
					"f001_brown"=>"f001_brown","f002_brown"=>"f002_brown","f004_brown"=>"f004_brown","f005_brown"=>"f005_brown","f006_brown"=>"f006_brown","f007_brown"=>"f007_brown","f008_brown"=>"f008_brown","f009_brown"=>"f009_brown","f010_brown"=>"f010_brown","f011_brown"=>"f011_brown","f012_brown"=>"f012_brown"
					);
				}
				//blonde
				elseif($color_keys ==3){
					$available_portraits = array(
					"f002_ashblonde"=>"f002_ashblonde","f004_ashblonde"=>"f004_ashblonde","f005_ashblonde"=>"f005_ashblonde","f008_ashblonde"=>"f008_ashblonde","f009_ashblonde"=>"f009_ashblonde","f001_blonde"=>"f001_blonde","f007_blonde"=>"f007_blonde","f008_blonde"=>"f008_blonde","f010_blonde"=>"f010_blonde","f011_blonde"=>"f011_blonde","f012_blonde"=>"f012_blonde","f008_highblonde"=>"f008_highblonde","f010_highblonde"=>"f010_highblonde"
					);
				}
				//red
				else {
					$available_portraits = array(
					"f008_strawberryblonde"=>"f008_strawberryblonde","f010_strawberryblonde"=>"f010_strawberryblonde","f001_red"=>"f001_red","f002_red"=>"f002_red","f003_red"=>"f003_red","f004_red"=>"f004_red","f005_red"=>"f005_red","f009_red"=>"f009_red","f011_red"=>"f011_red","f012_red"=>"f012_red"
					);
				}			
			}
			//male
			else 
			{
				//dark
				if($color_keys ==1){
					$available_portraits = array(
						"m001_dark"=>"m001_dark","m003_dark"=>"m003_dark","m004_dark"=>"m004_dark","m005_dark"=>"m005_dark","m007_dark"=>"m007_dark","m008_dark"=>"m008_dark","m009_dark"=>"m009_dark"
					);
				}
				//brown
				elseif($color_keys ==2){
					$available_portraits = array(
					"m002_brown"=>"m002_brown","m004_brown"=>"m004_brown","m005_brown"=>"m005_brown","m006_brown"=>"m006_brown","m007_brown"=>"m007_brown","m011_brown"=>"m011_brown"
					);
				}
				//blonde
				elseif($color_keys ==3){
					$available_portraits = array(
					"m003_ashblonde"=>"m003_ashblonde","m004_ashblonde"=>"m004_ashblonde","m002_blonde"=>"m002_blonde","m006_blonde"=>"m006_blonde","m010_blonde"=>"m010_blonde","m012_blonde"=>"m012_blonde"
					);
				}
				//red
				else {
					$available_portraits = array(
					"m006_red"=>"m006_red"
					);
				}				
			}			
		}

		//return
		return $available_portraits;
	}	
	
	
}
