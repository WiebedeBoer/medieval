<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Place;
use App\Culture;
use App\Person;
use App\Realm;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//main
    public function index()
    {            
		$placedata = Place::with('regions')->orderBy('place_name', 'asc')->paginate(50);
		return view('place.index', compact('placedata'));        
    }
	
	//show
    public function show($id)
    {       
        $placedata = Place::with('regions')->where('place_id', $id)->firstOrFail();
        $region_id = $placedata->regions->region_id;        
		$region = Region::where('region_id', $region_id)->firstOrFail();
        $culture_id = $region->culture;
		$culture = Culture::where('culture_id', $culture_id)->firstOrFail();
        $user = auth()->user();
        $realm_id = $placedata->realm;
        if ($realm_id !=NULL){
            $realm = Realm::where('realm_id', $realm_id)->firstOrFail();    
            $ktusers = countkt($user->id,$id,$realm->ruler,$realm->marshall,$realm->steward,$placedata->lord_paramount,$placedata->tenant_in_chief,$placedata->mesne_lord,$placedata->tenant_paravail);
        }
        else {
            $ktusers =0;
        }
		return view('place.show', compact('placedata','culture','user','region','ktusers','id'));        
    }
	
    //update function
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'place_description' => 'nullable', 
            'develop' => 'required|string:value',
            'person' => 'required|integer'    
        ]);

        $develop_type = request('place_description');    
        $place_description = request('place_description');       
        
        if ($develop_type =="agriculture"){
            agriculture($id,$place_description);
            return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
        }
        elseif ($develop_type =="industry"){
            industry($id,$place_description);
            return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
        }
        elseif ($develop_type =="fortify"){
            fortify($id,$place_description);
            return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
        }
        elseif ($develop_type =="court"){
            holdcourt($id,$place_description);
            return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
        }
        elseif ($develop_type =="rally"){
            rally($id,$place_description);
            return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
        }
        elseif ($develop_type =="train"){
            train($id,$place_description);
            return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
        }
        elseif ($develop_type =="draft"){
            draft($id,$place_description);
            return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
        }
        else {
            return redirect('/place/'.$id)->with('message', 'Not allowed');
        }        
    }


	
	//edit form
    public function edit(Request $request,$id)
    {       
        $sorttype = $request->query('sort');
        
        $placedata = Place::with('regions')->where('place_id', $id)->firstOrFail();
		$region_id = $placedata->regions->region_id;
		$region = Region::where('region_id', $region_id)->firstOrFail();
		$culture_id = $region->culture;
        $culture = Culture::where('culture_id', $culture_id)->firstOrFail();
        $user = auth()->user();        
        $realm_id = $placedata->realm;
        if ($realm_id !=NULL){
            $realm = Realm::where('realm_id', $realm_id)->firstOrFail();    
            $ktusers = countkt($user->id,$id,$realm->ruler,$realm->marshall,$realm->steward,$placedata->lord_paramount,$placedata->tenant_in_chief,$placedata->mesne_lord,$placedata->tenant_paravail);
            $allodial = $placedata->allodial_owner;
            if ($allodial !=NULL && $realm_id !=NULL && $ktusers >=1){    
                $realm_count = DB::table('citizens')->where('realm', '=', $realm_id)->count();
                if ($realm_count >=1){
                    $kt_check =1;

                    if($sorttype =="agriculture"){
                        $persons = DB::table('people')->leftJoin('citizens', 'people.person_id', '=', 'citizens.citizen')->leftJoin('dynasties','people.dynasty','=','dynasties.dynasty_id')->where('citizen', '=', $realm_id)->where('kt', '<>', 0)->select('people.person_id','people.person_name','people.eng','people.com','people.agr','people.lea','people.cha','people.jud','dynasties.dynasty_name')->orderBy('people.agr','desc')->get();
                    }
                    elseif($sorttype =="commerce"){
                        $persons = DB::table('people')->leftJoin('citizens', 'people.person_id', '=', 'citizens.citizen')->leftJoin('dynasties','people.dynasty','=','dynasties.dynasty_id')->where('citizen', '=', $realm_id)->where('kt', '<>', 0)->select('people.person_id','people.person_name','people.eng','people.com','people.agr','people.lea','people.cha','people.jud','dynasties.dynasty_name')->orderBy('people.com','desc')->get();
                    }
                    elseif($sorttype =="charisma"){
                        $persons = DB::table('people')->leftJoin('citizens', 'people.person_id', '=', 'citizens.citizen')->leftJoin('dynasties','people.dynasty','=','dynasties.dynasty_id')->where('citizen', '=', $realm_id)->where('kt', '<>', 0)->select('people.person_id','people.person_name','people.eng','people.com','people.agr','people.lea','people.cha','people.jud','dynasties.dynasty_name')->orderBy('people.cha','desc')->get();
                    }
                    elseif($sorttype =="engineer"){
                        $persons = DB::table('people')->leftJoin('citizens', 'people.person_id', '=', 'citizens.citizen')->leftJoin('dynasties','people.dynasty','=','dynasties.dynasty_id')->where('citizen', '=', $realm_id)->where('kt', '<>', 0)->select('people.person_id','people.person_name','people.eng','people.com','people.agr','people.lea','people.cha','people.jud','dynasties.dynasty_name')->orderBy('people.eng','desc')->get();
                    }
                    elseif($sorttype =="judgement"){
                        $persons = DB::table('people')->leftJoin('citizens', 'people.person_id', '=', 'citizens.citizen')->leftJoin('dynasties','people.dynasty','=','dynasties.dynasty_id')->where('citizen', '=', $realm_id)->where('kt', '<>', 0)->select('people.person_id','people.person_name','people.eng','people.com','people.agr','people.lea','people.cha','people.jud','dynasties.dynasty_name')->orderBy('people.jud','desc')->get();
                    }
                    elseif($sorttype =="leadership"){
                        $persons = DB::table('people')->leftJoin('citizens', 'people.person_id', '=', 'citizens.citizen')->leftJoin('dynasties','people.dynasty','=','dynasties.dynasty_id')->where('citizen', '=', $realm_id)->where('kt', '<>', 0)->select('people.person_id','people.person_name','people.eng','people.com','people.agr','people.lea','people.cha','people.jud','dynasties.dynasty_name')->orderBy('people.lea','desc')->get();
                    }
                    else{
                        $persons = DB::table('people')->leftJoin('citizens', 'people.person_id', '=', 'citizens.citizen')->leftJoin('dynasties','people.dynasty','=','dynasties.dynasty_id')->where('citizen', '=', $realm_id)->where('kt', '<>', 0)->select('people.person_id','people.person_name','people.eng','people.com','people.agr','people.lea','people.cha','people.jud','dynasties.dynasty_name')->orderBy('people.person_name', 'asc')->get();
                    }
                    
                }
                else {
                    $kt_check =0;
                    $persons =[];
                }                   
            }
            else {
                $kt_check =0;
                $persons =[];
            }
        }
        else {
            $kt_check =0;
            $persons =[];          
        }        
		return view('place.edit', compact('placedata','culture','user','region','persons','kt_check','id'));        
    }

	//build form
    public function build($id)
    {       
        $placedata = Place::with('regions')->where('place_id', $id)->firstOrFail();
		$region_id = $placedata->regions->region_id;
		$region = Region::where('region_id', $region_id)->firstOrFail();
		$culture_id = $region->culture;
        $culture = Culture::where('culture_id', $culture_id)->firstOrFail();
        $user = auth()->user();
		return view('place.build', compact('placedata','culture','user','region','id'));        
    }

    //kt users
    public function countkt($user_id,$id,$king,$marshall,$steward,$lord_paramount,$tenant_in_chief,$mesne_lord,$tenant_paravail)
    {    
        $dynasty_count = Dynasty::where('dynaty_owner', $user_id)->count();
        if ($dynasty_count ==1){
            $count_home = DB::table('dynasties')->where('dynasty_owner', '=', $user_id)->where('home', '=', $id)->count();
            $king_count = DB::table('people')->where('dynasty_owner', '=', $king)->count();
            $marshall_count = DB::table('people')->where('dynasty_owner', '=', $marshall)->count();
            $steward_count = DB::table('people')->where('dynasty_owner', '=', $marshall)->count();
            $lord_paramount_count = DB::table('people')->where('dynasty_owner', '=', $lord_paramount)->count();
            $tenant_in_chief_count = DB::table('people')->where('dynasty_owner', '=', $tenant_in_chief)->count();
            $mesne_lord_count = DB::table('people')->where('dynasty_owner', '=', $mesne_lord)->count();
            $tenant_paravail_count = DB::table('people')->where('dynasty_owner', '=', $tenant_paravail)->count();
            $count_ktusers = $count_home + $king_count + $steward_count + $marshall_count + $lord_paramount_count + $tenant_in_chief_count + $mesne_lord_count + $tenant_paravail_count;
        }
        else {
            $count_ktusers = 0;
        }   
        return $count_ktusers;
    }

    //kt calculations
    public function agriculture($id,$place_description){
        $place = Place::find($id);
        if($place->agr <999){
            $place->place_description = $place_description;       
            $person_id = request('person'); 
            $person = Person::find($person_id);
            $up = $person->agr + $person->eng;
            $total = $place->agr + $up;
            if($total >999){
                $place->agr =999;
            }
            else {
                $place->agr =$total;
            } 
            $place->save();       
            $new_kt = $person->kt - 1;
            $person->kt = $new_kt;
            $person->save(); 
        } 
    }

    public function industry($id,$place_description){
        $place = Place::find($id);
        if($place->com <999){
            $place->place_description = $place_description;       
            $person_id = request('person'); 
            $person = Person::find($person_id);
            $up = $person->com + $person->eng;
            $total = $place->com + $up;
            if($total >999){
                $place->com =999;
            }
            else {
                $place->com =$total;
            } 
            $place->save();       
            $new_kt = $person->kt - 1;
            $person->kt = $new_kt;
            $person->save(); 
        } 
    }

    public function fortify($id,$place_description){
        $place = Place::find($id);
        if($place->def <999){
            $place->place_description = $place_description;       
            $person_id = request('person'); 
            $person = Person::find($person_id);
            $up = $person->jud + $person->eng;
            $total = $place->def + $up;
            if($total >999){
                $place->def =999;
            }
            else {
                $place->def =$total;
            } 
            $place->save();       
            $new_kt = $person->kt - 1;
            $person->kt = $new_kt;
            $person->save(); 
        } 
    }

    public function holdcourt($id,$place_description){
        $place = Place::find($id);
        if($place->jus <999){
            $place->place_description = $place_description;       
            $person_id = request('person'); 
            $person = Person::find($person_id);
            $up = $person->jud + $person->cha;
            $total = $place->jus + $up;
            if($total >999){
                $place->jus =999;
            }
            else {
                $place->jus =$total;
            } 
            $place->save();       
            $new_kt = $person->kt - 1;
            $person->kt = $new_kt;
            $person->save(); 
        }  
    }

    public function rally($id,$place_description){
        $place = Place::find($id);
        if($place->mor <100){
            $place->place_description = $place_description;       
            $person_id = request('person'); 
            $person = Person::find($person_id);
            $up = $person->lea + $person->cha;
            $total = $place->mor + $up;
            if($total >100){
                $place->mor =100;
            }
            else {
                $place->mor =$total;
            }  
            $place->save();       
            $new_kt = $person->kt - 1;
            $person->kt = $new_kt;
            $person->save(); 
        } 
    }

    public function train($id,$place_description){
        $place = Place::find($id);
        if($place->tra <100){
            $place->place_description = $place_description;       
            $person_id = request('person'); 
            $person = Person::find($person_id);
            $up = $person->lea;
            $total = $place->tra + $up;
            if($total >100){
                $place->tra =100;
            }
            else {
                $place->tra =$total;
            }            
            $place->save();       
            $new_kt = $person->kt - 1;
            $person->kt = $new_kt;
            $person->save(); 
        }  
    }

    public function draft($id,$place_description){
        $place = Place::find($id);
        if($place->population >100){
            $place->place_description = $place_description;       
            $person_id = request('person'); 
            $person = Person::find($person_id);
            $up = $person->lea;
            $place->sol = $place->sol + $up;
            $place->population = $place->population - $up;
            $place->save();       
            $new_kt = $person->kt - 1;
            $person->kt = $new_kt;
            $person->save(); 
        } 
    }

}
