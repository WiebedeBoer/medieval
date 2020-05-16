<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dungeon;
use App\Prisoner;
use App\Person;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class PrisonerController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	//main 
    public function index()
    {            	
		$prisoners = Prisoner::with('dungeons','captives')->get();
		$user = auth()->user();
		return view('brigades.index', compact('prisoners','user'));        
    }
	
	//show
    public function show($id)
    {       
        $prisoner = Prisoner::with('dungeons','captives')->where('prisoner_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('brigades.show', compact('prisoner','user'));        
    }
}
