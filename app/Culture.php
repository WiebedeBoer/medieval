<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    //cultures tabel
    protected $table = 'cultures';
    protected $primaryKey = 'culture_id';
	
	//fk
    public function steadcultures()
    {
        return $this->belongsTo('App\SteadCulture','stead_culture');
    } 
	
    public function religions()
    {
        return $this->belongsTo('App\Religion','manorial_culture');
    } 
	
	//regions
    public function regions()
    {
        return $this->hasMany('App\Region','culture');
    }	
	
	
}
