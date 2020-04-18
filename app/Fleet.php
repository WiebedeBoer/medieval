<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fleet extends Model
{
    //caravan tabel
    protected $table = 'fleets';
    protected $primaryKey = 'fleet_id';
	
    public function places()
    {
        return $this->belongsTo('App\Place','place');
    } 
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    } 
	
    public function owners()
    {
        return $this->belongsTo('App\Person','owner');
    }	
	
    public function masters()
    {
        return $this->belongsTo('App\Person','master');
    }
}
