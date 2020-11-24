<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Place;
use App\Culture;
use App\Person;
use App\Realm;
use App\Ruler;
use App\Dynasty;
use App\Building;
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
            $ruler = Ruler::where('realm', $realm_id)->firstOrFail();    
            $ktusers = $this->countkt($user->id,$id,$ruler->ruler,$ruler->marshall,$ruler->steward,$placedata->lord_paramount,$placedata->tenant_in_chief,$placedata->mesne_lord,$placedata->tenant_paravail);
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
        //request data
        $develop_type = request('place_description');    
        $place_description = request('place_description');   
        $person_id = request('person');  
        //validate
        $person_count = Person::where('person_id', $person_id)->count();
        $place_count = Place::where('place_id', $place_id)->count();
        if ($person_count ==1 && $place_count ==1){
            if ($develop_type =="agriculture"){
                $this->agriculture($id,$place_description,$person_id);
                return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
            }
            elseif ($develop_type =="industry"){
                $this->industry($id,$place_description,$person_id);
                return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
            }
            elseif ($develop_type =="fortify"){
                $this->fortify($id,$place_description,$person_id);
                return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
            }
            elseif ($develop_type =="court"){
                $this->holdcourt($id,$place_description,$person_id);
                return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
            }
            elseif ($develop_type =="rally"){
                $this->rally($id,$place_description,$person_id);
                return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
            }
            elseif ($develop_type =="train"){
                $this->train($id,$place_description,$person_id);
                return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
            }
            elseif ($develop_type =="draft"){
                $this->draft($id,$place_description,$person_id);
                return redirect('/place/'.$id.'/edit')->with('message', 'Updated');
            }
            else {
                return redirect('/place/'.$id)->with('message', 'Not allowed');
            } 
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
            $ruler = Ruler::where('realm', $realm_id)->firstOrFail();      
            $ktusers = $this->countkt($user->id,$id,$ruler->ruler,$ruler->marshall,$ruler->steward,$placedata->lord_paramount,$placedata->tenant_in_chief,$placedata->mesne_lord,$placedata->tenant_paravail);
            //$ktusers =1;
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
		return view('place.edit', compact('placedata','culture','user','region','persons','kt_check','id','ruler'));        
    }

	//build form
    public function build($id)
    {       
        $placedata = Place::with('regions')->where('place_id', $id)->firstOrFail();
		$region_id = $placedata->regions->region_id;
		$region = Region::where('region_id', $region_id)->firstOrFail();
		$culture_id = $region->culture;
        $culture = Culture::where('culture_id', $culture_id)->firstOrFail();
        $building_count = Building::where('place',$id)->count();
        if($building_count >=1){
            $buildings = Building::with('types')->where('place',$id)->get();
        }
        else {
            $buildings = [];
        }     
        $user = auth()->user();
		return view('place.build', compact('placedata','culture','user','region','id','buildings','building_count'));        
    }

    //kt users
    private function countkt($user_id,$id,$king,$marshall,$steward,$lord_paramount,$tenant_in_chief,$mesne_lord,$tenant_paravail)
    {    
        $dynasty_count = Dynasty::where('dynasty_owner', $user_id)->count();
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
    private function agriculture($id,$place_description,$person_id){
        $place = Place::find($id);
        if($place->agr <999){
            $place->place_description = $place_description;       
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
            $person->agr = $this->stats($person->agr);
            $person->eng = $this->stats($person->eng);
            $person->save(); 
        } 
    }

    private function industry($id,$place_description,$person_id){
        $place = Place::find($id);
        if($place->com <999){
            $place->place_description = $place_description;        
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
            $person->com = $this->stats($person->com);
            $person->eng = $this->stats($person->eng);
            $person->save(); 
        } 
    }

    private function fortify($id,$place_description,$person_id){
        $place = Place::find($id);
        if($place->def <999){
            $place->place_description = $place_description;       
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
            $person->jud = $this->stats($person->jud);
            $person->eng = $this->stats($person->eng);
            $person->save(); 
        } 
    }

    private function holdcourt($id,$place_description,$person_id){
        $place = Place::find($id);
        if($place->jus <999){
            $place->place_description = $place_description;       
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
            $person->jud = $this->stats($person->jud);
            $person->cha = $this->stats($person->cha);
            $person->save(); 
        }  
    }

    private function rally($id,$place_description,$person_id){
        $place = Place::find($id);
        if($place->mor <100){
            $place->place_description = $place_description;        
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
            $person->lea = $this->stats($person->lea);
            $person->cha = $this->stats($person->cha);
            $person->save(); 
        } 
    }

    private function train($id,$place_description,$person_id){
        $place = Place::find($id);
        if($place->tra <100){
            $place->place_description = $place_description;       
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
            $person->lea = $this->stats($person->lea);
            $person->save(); 
        }  
    }

    private function draft($id,$place_description,$person_id){
        $place = Place::find($id);
        $person = Person::find($person_id);
        if($place->population >=500000){
            $p_bonus = 100; 
            $s_bonus = 100; 
        }
        elseif($place->population>=100000 && $place->population <500000){
            $p_bonus = $population / 5000;
            $s_bonus = 40; 
        }
        elseif($place->population >=10000 && $place->population <100000){
            $p_bonus = $population / 2000; 
            $s_bonus = 25; 
        }
        elseif($place->population >=1000 && $place->population <10000){
            $p_bonus = $population / 1000;
            $s_bonus = 5;
        }
        else {
            $p_bonus = $place->population / 1000;
            $s_bonus = 2; 
        }
        $draft = round(($person->lea * $s_bonus + $p_bonus * 50));
        $new_pop = $place->population - $draft;
        $new_sol = $place->sol + $draft;
        if($place->population >120){
            $old_training = $place->tra * $place->sol;
            $mod_training = round(($draft + $old_training) / $new_sol);
            if ($mod_training <1){
                $new_training = 1;
            }
            else {
                $new_training = $mod_training;
            }

            $place->place_description = $place_description; 
            $place->sol = $new_sol;
            $place->population = $new_pop;
            $place->tra = $new_training;
            $place->save();  

            $new_kt = $person->kt - 1;
            $person->lea = $this->stats($person->lea);
            $person->kt = $new_kt;
            $person->save(); 
        } 
    }

    private function stats($old_stat){
        if ($old_stat ==10){
            $new_stat = 10;
        }
        else {
            $rand_stat = rand(1,20);
            $min_stat = $old_stat + 10;
            if ($min_stat <$rand_stat){
                $new_stat = $old_stat + 1;
            }
            else {
                $new_stat = $old_stat;
            }
        }
        return $new_stat;
    }

}
