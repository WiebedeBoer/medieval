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
use App\MedievalName;

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
	
	//get portrait culture
	public function portraitculture()
	{
		//user id
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
		return $portrait_culture;
	}
	
	//get naming convention
	public function namingculture($gender)
	{
		//user id
		$user = auth()->user();
		$user_id = $user->id;
		//dynasty data
		$dynasty = Dynasty::where('dynasty_owner',$user_id)->firstOrFail();	
		//culture
		$main_culture = $dynasty->cultures->culture_name;
		$region_culture = $dynasty->cultures->warrior_culture;
		

		if ($region_culture =="Spanish"){
			$naming_culture ="iberian";
		}
		elseif ($region_culture =="German"){
			if ($main_culture =="Bohemian"){
				$naming_culture ="slavic";
			}
			else {
				$naming_culture ="german";
			}
		}		
		elseif ($region_culture =="Italian"){
			$naming_culture ="italian";
		}	
		elseif ($region_culture =="Anglo-Saxon" || $region_culture =="Celtic"){
			$naming_culture ="british";
		}
		elseif ($region_culture =="Frankish"){
			$naming_culture ="french";
		}		
		elseif ($region_culture =="Scandinavian"){
			$naming_culture ="scandinavian";
		}
		elseif ($region_culture =="Croatian" || $region_culture =="Polish" || $region_culture =="Kievan Rus"){
			if ($main_culture =="Lithuanian"){
				$naming_culture ="lithuanian";
			}
			else {
				$naming_culture ="slavic";
			}
		}
		elseif ($region_culture =="Balkan"){
			if ($main_culture =="Wallachian"){
				$naming_culture ="wallachian";
			}
			else {
				$naming_culture ="slavic";
			}
		}
		elseif ($region_culture =="Hungarian"){
			$naming_culture ="hungarian";
		}
		elseif ($region_culture =="Byzantine"){
			if ($main_culture =="Byzantine"){
				$naming_culture ="byzantine";
			}
			else {
				$naming_culture ="georgian";
			}			
		}
		elseif ($region_culture =="Arabic"){
			$naming_culture ="arabic";
		}
		elseif ($region_culture =="Turkish"){
			$naming_culture ="turkish";
		}
		
		else {
			$naming_culture ="mongol";
		}

		$names = MedievalName::where('culture',$naming_culture)->where('gender',$gender)->get();			
		
		return $names;
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
			$portrait_culture = $this->portraitculture();				
			//portrait key
			$portrait_no = $this->portraitkey($portrait,$portrait_culture,$gender);
			//check if exist		
			if (is_int($portrait_no) || $portrait_no ==0){
				$portrait_keys = $portrait_no;
				$portrait = $this->portraitvalue($portrait_keys,$portrait_culture,$gender);
			}
			else {
				$portrait_keys = 0;
				$portrait = $this->portraitvalue(0,$portrait_culture,$gender);
			}
			$portrait_array_count = $this->portraitcount($portrait_culture,$gender);
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
			$nextportrait = $this->portraitvalue($portrait_key_next,$portrait_culture,$gender);
			//previous portrait
			$prevportrait = $this->portraitvalue($portrait_key_prev,$portrait_culture,$gender);
			//first and last portrait when changing color
			$firstmaleportrait = $this->portraitvalue(0,$portrait_culture,"male");
			$firstfemaleportrait = $this->portraitvalue(0,$portrait_culture,"female");
			//naming culture
			$names = $this->namingculture($gender);
			return view('portraits.create', compact('gender','dynasty','portrait_culture','users','portrait','nextportrait','prevportrait','firstmaleportrait','firstfemaleportrait','names'));    			
		}
    
    }


	//portrait key picker
	public function portraitkey($portrait,$portrait_culture,$gender){

		$available_portraits = $this->available_portraits($portrait_culture,$gender);
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
	public function portraitvalue($portraitkey,$portrait_culture,$gender){
		$available_portraits = $this->available_portraits($portrait_culture,$gender);
		//array keys
		$e_keys = array_values($available_portraits);			
		$portraitvalue = $e_keys[$portraitkey]; 
		return $portraitvalue;
	}	
	
	//portrait count
	public function portraitcount($portrait_culture,$gender){
		$available_portraits = $this->available_portraits($portrait_culture,$gender);
		$portrait_array_count = count($available_portraits);
		return $portrait_array_count;
	}	
	
	//available portraits
	public function available_portraits($portrait_culture,$gender)
	{

		//muslim
		if($portrait_culture =="Muslim")
		{
			//male
			if($gender =="male")
			{
					$available_portraits = array(
						//dark
						"m001_dark"=>"m001_dark","m004_dark"=>"m004_dark","m007_dark"=>"m007_dark","m008_dark"=>"m008_dark","m009_dark"=>"m009_dark",
						//brown
						"m004_brown"=>"m004_brown","m007_brown"=>"m007_brown"
					);		
			}
			//female
			else 
			{
					$available_portraits = array(
						//dark
						"f002_dark"=>"f002_dark","f003_dark"=>"f003_dark","f004_dark"=>"f004_dark","f005_dark"=>"f005_dark","f006_dark"=>"f006_dark","f007_dark"=>"f007_dark","f009_dark"=>"f009_dark","f011_dark"=>"f011_dark",
						//brown
						"f002_brown"=>"f002_brown","f004_brown"=>"f004_brown","f005_brown"=>"f005_brown","f006_brown"=>"f006_brown","f011_brown"=>"f011_brown",
						//blonde
						"f002_ashblonde"=>"f002_ashblonde","f005_ashblonde"=>"f005_ashblonde","f004_ashblonde"=>"f004_ashblonde","f011_blonde"=>"f011_blonde",
						//red
						"f002_red"=>"f002_red","f003_red"=>"f003_red","f004_red"=>"f004_red","f005_red"=>"f005_red"
					);	
			}
		}
		//nordic
		elseif($portrait_culture =="Nordic")
		{
			//female
			if($gender =="female")
			{
					$available_portraits = array(
					//brown
					"f001_brown"=>"f001_brown","f002_brown"=>"f002_brown","f004_brown"=>"f004_brown","f007_brown"=>"f007_brown","f008_brown"=>"f008_brown","f009_brown"=>"f009_brown","f010_brown"=>"f010_brown","f011_brown"=>"f011_brown","f012_brown"=>"f012_brown",
					//blonde
					"f002_ashblonde"=>"f002_ashblonde","f004_ashblonde"=>"f004_ashblonde","f005_ashblonde"=>"f005_ashblonde","f008_ashblonde"=>"f008_ashblonde","f009_ashblonde"=>"f009_ashblonde","f001_blonde"=>"f001_blonde","f007_blonde"=>"f007_blonde","f008_blonde"=>"f008_blonde","f010_blonde"=>"f010_blonde","f011_blonde"=>"f011_blonde","f012_blonde"=>"f012_blonde","f008_highblonde"=>"f008_highblonde","f010_highblonde"=>"f010_highblonde",
					//red
					"f008_strawberryblonde"=>"f008_strawberryblonde","f010_strawberryblonde"=>"f010_strawberryblonde","f001_red"=>"f001_red","f002_red"=>"f002_red","f003_red"=>"f003_red","f004_red"=>"f004_red","f005_red"=>"f005_red","f009_red"=>"f009_red","f011_red"=>"f011_red","f012_red"=>"f012_red"
					);		
			}
			//male
			else 
			{
					$available_portraits = array(
					//brown
					"m002_brown"=>"m002_brown","m005_brown"=>"m005_brown","m006_brown"=>"m006_brown","m007_brown"=>"m007_brown","m011_brown"=>"m011_brown",
					//blonde
					"m003_ashblonde"=>"m003_ashblonde","m004_ashblonde"=>"m004_ashblonde","m002_blonde"=>"m002_blonde","m006_blonde"=>"m006_blonde","m010_blonde"=>"m010_blonde","m012_blonde"=>"m012_blonde",
					//red
					"m006_red"=>"m006_red"
					);			
			}			
		}	
		//southern european
		else 
		{
			//female
			if($gender =="female")
			{
					$available_portraits = array(
						//dark
						"f001_dark"=>"f001_dark","f002_dark"=>"f002_dark","f003_dark"=>"f003_dark","f004_dark"=>"f004_dark","f005_dark"=>"f005_dark","f006_dark"=>"f006_dark","f007_dark"=>"f007_dark","f009_dark"=>"f009_dark","f011_dark"=>"f011_dark",
						//brown
						"f001_brown"=>"f001_brown","f002_brown"=>"f002_brown","f004_brown"=>"f004_brown","f005_brown"=>"f005_brown","f006_brown"=>"f006_brown","f007_brown"=>"f007_brown","f008_brown"=>"f008_brown","f009_brown"=>"f009_brown","f010_brown"=>"f010_brown","f011_brown"=>"f011_brown","f012_brown"=>"f012_brown",
						//blonde
						"f002_ashblonde"=>"f002_ashblonde","f004_ashblonde"=>"f004_ashblonde","f005_ashblonde"=>"f005_ashblonde","f008_ashblonde"=>"f008_ashblonde","f009_ashblonde"=>"f009_ashblonde","f001_blonde"=>"f001_blonde","f007_blonde"=>"f007_blonde","f008_blonde"=>"f008_blonde","f010_blonde"=>"f010_blonde","f011_blonde"=>"f011_blonde","f012_blonde"=>"f012_blonde","f008_highblonde"=>"f008_highblonde","f010_highblonde"=>"f010_highblonde",
						//red
						"f008_strawberryblonde"=>"f008_strawberryblonde","f010_strawberryblonde"=>"f010_strawberryblonde","f001_red"=>"f001_red","f002_red"=>"f002_red","f003_red"=>"f003_red","f004_red"=>"f004_red","f005_red"=>"f005_red","f009_red"=>"f009_red","f011_red"=>"f011_red","f012_red"=>"f012_red"
					);		
			}
			//male
			else 
			{
					$available_portraits = array(
						//dark
						"m001_dark"=>"m001_dark","m003_dark"=>"m003_dark","m004_dark"=>"m004_dark","m005_dark"=>"m005_dark","m007_dark"=>"m007_dark","m008_dark"=>"m008_dark","m009_dark"=>"m009_dark",
						//brown
						"m002_brown"=>"m002_brown","m004_brown"=>"m004_brown","m005_brown"=>"m005_brown","m006_brown"=>"m006_brown","m007_brown"=>"m007_brown","m011_brown"=>"m011_brown",
						//blonde
						"m003_ashblonde"=>"m003_ashblonde","m004_ashblonde"=>"m004_ashblonde","m002_blonde"=>"m002_blonde","m006_blonde"=>"m006_blonde","m010_blonde"=>"m010_blonde","m012_blonde"=>"m012_blonde",
						//red
						"m006_red"=>"m006_red"
					);			
			}			
		}
		//return
		return $available_portraits;
	}


    //store function
    public function store()
    {     
        $charactercount = $this->charactercount();
		$dynastycount = $this->dynastycount();

		//not allowed
		if ($charactercount >=4 || $dynastycount <1){
			return redirect('/home')->with('message', 'Not allowed1');
		}
		//create allowed
		else {
			$data = request()->validate([
				'portrait' => 'required',
				'person_name' => 'required|min:3',
				'gender' => 'required',
				'jud' => 'required',
				'eng' => 'required',
				'com' => 'required',
				'agr' => 'required',
				'tac' => 'required',
				'lea' => 'required',
				'cha' => 'required',
				'bra' => 'required',
				'str' => 'required',
				'agi' => 'required',
				'pol' => 'required',
				'swo' => 'required',
				'arc' => 'required',
				'rid' => 'required',
				'sai' => 'required',
				'rai' => 'required',
				'tra' => 'required'
			]); 			
			//user id
			$user = auth()->user();
			$user_id = $user->id;
			//dynasty data
			$dynasty = Dynasty::where('dynasty_owner',$user_id)->firstOrFail();	
			//gender
			$request_gender = request('gender');
			if ($request_gender =="male"){
				$gender =1;
			}
			elseif($request_gender =="female"){
				$gender =0;	
			}
			else {
				$gender =1;
			}
			//saving
			$person = new Person(); 
			$person->owner = $user_id;	
			$person->dynasty = $dynasty->dynasty_id;		
			$person->culture = $dynasty->culture;				
			$portrait_culture = $this->portraitculture();		
			$person->person_name = request('person_name');
			$person->portrait = request('portrait');					
			$portrait = $person->portrait;	
			//stats
			$person->jud = request('jud');
			$person->eng = request('eng');
			$person->com = request('com');
			$person->agr = request('agr');
			$person->tac = request('tac');
			$person->lea = request('lea');
			$person->cha = request('cha');
			$person->bra = request('bra');
			$person->str = request('str');
			$person->agi = request('agi');
			$person->pol = request('pol');
			$person->swo = request('swo');
			$person->arc = request('arc');
			$person->rid = request('rid');
			$person->sai = request('sai');
			$person->rai = request('rai');
			$person->tra = request('tra');
			//portrait
			$emblen_no = $this->portraitkey($color_keys,$portrait,$portrait_culture,$request_gender);
			if (is_int($emblen_no) || $emblen_no ==0){
				//saving
				$person->save();       
				//return
				return redirect('/dynasty/'.$dynasty->dynasty_id)->with('message', 'Added');
			}
			else {
				return redirect('/home')->with('message', 'Not allowed portrait');
			}	
			
		}
    }	
	
	
}
