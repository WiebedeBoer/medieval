<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Dynasty;
use App\User;
use App\Chronicle;

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
}
