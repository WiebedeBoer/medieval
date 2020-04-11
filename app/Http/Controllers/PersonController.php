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

class PersonController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
		
	//show
    public function show($id)
    {       
        $persondata = Person::with('cultures','owners','dynasties')->where('person_id', $id)->firstOrFail();	
		$user = auth()->user();
		return view('person.show', compact('persondata','user'));        
    }
	
    //marriage function
    public function marriage(Request $request, $id)
    {
        $data = $request->validate([
            'spouse' => 'required'        
        ]);
		
		$spouse = request('spouse');
		
		$user = auth()->user();
		$user_id = $user->id;

		$proposalcheck = Person::where('owner',$user_id)->where('person_id',$id)->count();
		$proposercheck = Person::where('owner',$user_id)->where('person_id',$spouse)->count();

		if ($proposalcheck ==1 || $proposercheck ==1){	
	        Person::where('person_id', $id)->update($data);
			return redirect('/person/'.$id)->with('message', 'Proposal accepted');
		}
		else {
			return redirect('/home')->with('message', 'Not allowed');
		}

    }
	
    //marriage proposal function
    public function marriage_proposal(Request $request, $id)
    {
        $data = $request->validate([
            'spouse' => 'required'        
        ]);
		$proposal = new MarriageProposal();
		$proposal->proposer = $id;		
		$proposal->spouse = request('spouse');

		$user = auth()->user();
		$user_id = $user->id;		
		$persondata = Person::with('cultures','owners','dynasties')->where('person_id', $id)->firstOrFail();
		$dynasty = Dynasty::where('dynasty_owner', $user_id)->firstOrFail();
		$dynasty_id = $dynasty->dynasty_id;		
		

		if ($persondata->gender ==1){
			$proposalcheck = Person::where('gender', 0)->where('spouse',0)->where('owner','!=',$user_id)->where('dynasty','!=',$dynasty_id)->count();
			$proposercheck = Person::where('gender', 1)->where('spouse',0)->where('owner',$user_id)->where('dynasty',$dynasty_id)->count();
		}
		else {
			$proposalcheck = Person::where('gender', 1)->where('spouse',0)->where('owner','!=',$user_id)->where('dynasty','!=',$dynasty_id)->count();
			$proposercheck = Person::where('gender', 0)->where('spouse',0)->where('owner',$user_id)->where('dynasty',$dynasty_id)->count();
		}
		
		if ($proposalcheck ==1 && $proposercheck ==1){
			$proposal->save(); 
			return redirect('/person/'.$id)->with('message', 'Proposal send');
		}
		else {
			return redirect('/home')->with('message', 'Not allowed');
		}

    }
	
	//edit form
    public function edit($id)
    {       
        $persondata = Person::with('cultures','owners','dynasties')->where('person_id', $id)->firstOrFail();	
		$user = auth()->user();
		$user_id = $user->id;

		if ($persondata->spouse ==0){
			$dynasty = Dynasty::where('dynasty_owner', $user_id)->firstOrFail();
			$dynasty_id = $dynasty->dynasty_id;
			//male
			if ($persondata->gender ==1){
				$personcount = Person::where('gender', 0)->where('spouse',0)->where('owner','!=',$user_id)->where('dynasty','!=',$dynasty_id)->count();
				if($personcount >=1){
					$persons = Person::with('cultures','owners','dynasties')->where('spouse',0)->where('gender', 0)->where('owner','!=',$user_id)->where('dynasty','!=',$dynasty_id)->get();
				}
				else {
					$persons =[];
				}
				
			}
			//female
			else {
				$personcount = Person::where('gender', 1)->where('spouse',0)->where('owner','!=',$user_id)->where('dynasty','!=',$dynasty_id)->count();
				if($personcount >=1){
					$persons = Person::with('cultures','owners','dynasties')->where('spouse',0)->where('gender', 1)->where('owner','!=',$user_id)->where('dynasty','!=',$dynasty_id)->get();
				}
				else {
					$persons =[];
				}
			}
		}
		else {
			$persons =[];
			$personcount =0;
		}
		
		
		return view('person.edit', compact('persondata','personcount','persons','user'));        
    }	
	
}
