<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //regions tabel
    protected $table = 'regions';
    protected $primaryKey = 'region_id';
	
    public function cultures()
    {
        return $this->belongsTo('App\Culture','culture');
    } 

    public function places()
    {
        return $this->hasMany('App\Place','place_id');
    }	
	
}
