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
		$rooms = Room::with('buildings')->orderBy('building','ASC')->orderBy('room_name','ASC')->paginate(50);
		$user = auth()->user();
		return view('rooms.index', compact('rooms','user'));        
    }
	
	//show
    public function show($id)
    {       
        $room = Room::with('buildings')->where('room_id', $id)->firstOrFail();
        $user = auth()->user();
        $furnishing_count = Furnishing::where('room', $id)->count();
        if ($furnishing_count >=1){
            $furnishings = Furnishing::with('buildings')->where('room', $id)->get();
        }
        else {
            $furnishings = [];
        }
		return view('rooms.show', compact('room','user','furnishing_count','furnishings'));        
    }	
	
}
