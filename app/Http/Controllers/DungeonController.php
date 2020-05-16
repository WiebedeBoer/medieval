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
		$dungeons = Dungeon::with('places','masters')->get();
		$user = auth()->user();
		return view('dungeons.index', compact('dungeons','user'));        
    }
	
	//show
    public function show($id)
    {       
        $dungeon = Dungeon::with('places','masters')->where('dungeon_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('dungeons.show', compact('dungeon','user'));        
    }
}
