<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SteadCulture extends Model
{
    //homestead names tabel
    protected $table = 'stead_cultures';
    protected $primaryKey = 'culture_id';
	
    public function cultures()
    {
        return $this->hasMany('App\Culture','stead_culture');
    }	

    public function steadnames()
    {
        return $this->hasMany('App\SteadName','stead_culture');
    }		
	
}
