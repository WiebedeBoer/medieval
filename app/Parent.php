<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    //parents tabel
    protected $table = 'parents';
    protected $primaryKey = 'parentage_id';
	
    public function fathers()
    {
        return $this->belongsTo('App\Person','father');
    } 
	
    public function mothers()
    {
        return $this->belongsTo('App\Person','mother');
    } 
	
    public function kids()
    {
        return $this->belongsTo('App\Person','child');
    } 	
	
}
