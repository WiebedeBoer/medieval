<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SteadName extends Model
{
    //homestead names tabel
    protected $table = 'stead_names';
    protected $primaryKey = 'stead_id';
	
    public function steadcultures()
    {
        return $this->belongsTo('App\SteadCulture','stead_culture');
    } 
	
}
