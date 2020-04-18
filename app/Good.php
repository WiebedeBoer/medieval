<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    //goods tabel
    protected $table = 'goods';
    protected $primaryKey = 'good_id';
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    }
}
