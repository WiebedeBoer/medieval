<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ore extends Model
{
    //ores tabel
    protected $table = 'ores';
    protected $primaryKey = 'ore_id';
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    }
}
