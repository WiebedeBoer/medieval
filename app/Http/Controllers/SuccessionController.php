<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dynasty;
use App\Vote;
use App\Place;
use App\Quarter;

class SuccessionController extends Controller
{
	//main 
    public function index()
    {            	
        $user = auth()->user();
        $user_id = $user->id;	
        $dynasty_owner_count = Dynasty::where('dynasty_owner', $user_id)->count();
        $dynasty_owner = Dynasty::where('dynasty_owner', $user_id)->first();        
        //$elections = Vote::with('titles','holders','voters','candidates')->where('dynasty', $dynasty_owner->dynasty_id)->orderBy('title','ASC')->paginate(50);
        //$election_count = Vote::where('dynasty', $dynasty_owner->dynasty_id)->count();

        $dplaces = Place::distinct('civil')->get('civil');
		return view('succession.index', compact('user','dynasty_owner_count','dynasty_owner'));        
    }
	
	//show
    public function show($id)
    {       
        $vote_count = Vote::where('title', $id)->count();
        $votes = Vote::with('titles','holders','voters','candidates')->where('title', $id)->get();
        $user = auth()->user();
		return view('succession.show', compact('votes','user','vote_count'));        
    }

	//edit
    public function edit($id)
    {       
        $vote_count = Vote::where('title', $id)->count();
        $votes = Vote::with('titles','holders','voters','candidates')->where('title', $id)->get();
        $user = auth()->user();
		return view('succession.edit', compact('votes','user','vote_count'));        
    }
}
