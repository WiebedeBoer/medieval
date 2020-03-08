<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    //cultures tabel
    protected $table = 'cultures';
    protected $primaryKey = 'culture_id';
	
    public function regions()
    {
        return $this->hasMany('App\Region','region_id');
    }	
	
}
