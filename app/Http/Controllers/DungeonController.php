<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dungeon;
use App\Prisoner;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class DungeonController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	//main 
    public function index()
    {            	
        $dungeons = Dungeon::with('places','masters')->paginate(50);
        $dungeon_count = Dungeon::count();
		$user = auth()->user();
		return view('dungeons.index', compact('dungeons','user','dungeon_count'));        
    }
	
	//show
    public function show($id)
    {       
        $dungeon = Dungeon::with('places','masters')->where('dungeon_id', $id)->firstOrFail();
        $prisoner_count = Prisoner::where('dungeon', $id)->count();
        if($prisoner_count >=1){
            $prisoners = Prisoner::with('dungeons','captives')->where('dungeon', $id)->get();
        }
        else {
            $prisoners =[];
        }
		$user = auth()->user();
		return view('dungeons.show', compact('dungeon','user','prisoners','prisoner_count'));        
    }
}
