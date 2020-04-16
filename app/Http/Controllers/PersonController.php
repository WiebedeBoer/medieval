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
        $persondata = Person::with('cultures','owners','dynasties','mothers','fathers','spouses')->where('person_id', $id)->firstOrFail();	
		$user = auth()->user();
		
		//maiden name
		if($persondata->gender ==0 && $persondata->spouse !=0)
		{
			$maiden_id = $persondata->spouse;
			$maidendata = Person::with('cultures','owners','dynasties','mothers','fathers','spouses')->where('person_id', $maiden_id)->firstOrFail();
			$maiden_name = $maidendata->dynasties->dynasty_name;
			$maiden_id = $maidendata->dynasty;
		}
		else {
			$maiden_name ="";
			$maiden_id =0;

		}
		
		//mother maiden name
		if($persondata->mother !=0){
			$mother_id = $persondata->mother;
			$mothermaidendata = Person::with('cultures','owners','dynasties','mothers','fathers','spouses')->where('person_id', $mother_id)->firstOrFail();
			
			if($mothermaidendata->father !=0){
				$maternal_grandfather = $mothermaidendata->father;
				$maternaldata = Person::with('cultures','owners','dynasties','mothers','fathers','spouses')->where('person_id', $maternal_grandfather)->firstOrFail();
				$mother_maiden_name = $maternaldata->dynasties->dynasty_name;
				$mother_maiden_id = $maternaldata->dynasty;					
			}
			else {
				$mother_maiden_name ="";
				$mother_maiden_id =0;					
			}
		
		}
		else {
			$mother_maiden_name ="";
			$mother_maiden_id =0;			
		}
		
		//return view
		return view('person.show', compact('persondata','user','maiden_name','maiden_id','mother_maiden_name','mother_maiden_id'));        
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
