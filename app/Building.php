<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
   
    //buildings tabel
    protected $table = 'buildings';
    protected $primaryKey = 'building_id';

	public function owners()
    {
        return $this->belongsTo('App\Person','owner');
    } 
	
	public function masters()
    {
        return $this->belongsTo('App\Person','master');
    } 
	
    public function places()
    {
        return $this->belongsTo('App\Place','place');
    } 
	
    public function regions()
    {
        return $this->belongsTo('App\Region','region');
    } 
	
    public function types()
    {
        return $this->belongsTo('App\BuildingCategory','building_type');
    } 
}
