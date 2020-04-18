<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caravan extends Model
{
    //caravan tabel
    protected $table = 'caravans';
    protected $primaryKey = 'caravan_id';
	
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
