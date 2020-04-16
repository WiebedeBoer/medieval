<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //people tabel
    protected $table = 'people';
    protected $primaryKey = 'person_id';
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    } 
	
    public function owners()
    {
        return $this->belongsTo('App\User','owner');
    }

    public function cultures()
    {
        return $this->belongsTo('App\Culture','culture');
    }  

    public function spouses()
    {
        return $this->belongsTo('App\Person','spouse');
    } 

    public function fathers()
    {
        return $this->belongsTo('App\Person','father');
    } 

    public function mothers()
    {
        return $this->belongsTo('App\Person','mother');
    } 	
	
}
