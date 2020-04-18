<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //caravan tabel
    protected $table = 'cargos';
    protected $primaryKey = 'cargo_id';
	
    public function fleets()
    {
        return $this->belongsTo('App\Fleet','fleet');
    } 
	
    public function caravans()
    {
        return $this->belongsTo('App\Caravan','caravan');
    } 
		
    public function owners()
    {
        return $this->belongsTo('App\Person','owner');
    }	
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    } 

    public function resources()
    {
        return $this->belongsTo('App\ResourceType','resource');
    } 	
	
}
