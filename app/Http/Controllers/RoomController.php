<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\Room;
use App\Furnishing;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	//main 
    public function index()
    {            	
		$rooms = Room::with('buildings')->orderBy('room_name','ASC')->get();
		$user = auth()->user();
		return view('farmsteads.index', compact('rooms','user'));        
    }
	
	//show
    public function show($id)
    {       
        $room = Room::with('buildings')->where('room_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('farmsteads.show', compact('room','user'));        
    }	
	
}
