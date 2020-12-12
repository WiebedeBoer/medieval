<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
use App\Vote;
use App\Dynasty;
use App\Place;
use App\Quarter;
use App\Realm;
use App\Guild;
use App\Http\Controllers\TitleController;

class SuccessionController extends Controller
{
	//main 
    public function index()
    {            	
        $user = auth()->user();
        $user_id = $user->id;	
        $dynasty_owner_count = Dynasty::where('dynasty_owner', $user_id)->count();
        if($dynasty_owner_count >=1){
            $dynasty_owner = Dynasty::where('dynasty_owner', $user_id)->first();  
            $election_count = Vote::where('dynasty', $dynasty_owner->dynasty_id)->count();
            if($election_count >=1){
                $elections = Vote::with('titles','holders','voters','candidates')->where('dynasty', $dynasty_owner->dynasty_id)->orderBy('title','ASC')->paginate(50);
            }  
            else {
                $elections =[];
            }
        }
        else {
            $dynasty_owner =[];
            $election_count = 0;
            $elections =[];
        }        

		return view('succession.index', compact('user','dynasty_owner_count','dynasty_owner','elections','election_count'));        
    }

    //succession
    public function succession($id)
    {
        //fetch title
        $title = Title::with('owners','holders','heirs','regions','places','quarters','religions','votes')->where('title_id',$id)->firstOrFail();
        $title_controller = new TitleController;
        //fetch title traits
        $controlled_title = $title_controller->religion($title->religion,$title->career,$title->category,$title->rank,$title->name);
        //fetch user
        $user = auth()->user();
        $succession = $title_controller->succession($controlled_title->succession,$controlled_title->rank,$controlled_title->church,$title);
        //return
        return view('succession.succession', compact('user','title','controlled_title','succession')); 
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
