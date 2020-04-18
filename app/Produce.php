<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produce extends Model
{
    //produces tabel
    protected $table = 'produces';
    protected $primaryKey = 'produce_id';
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    }
}
