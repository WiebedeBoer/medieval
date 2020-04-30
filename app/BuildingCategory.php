<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuildingCategory extends Model
{
    //building categories tabel
    protected $table = 'building_categories';
    protected $primaryKey = 'building_id';
	
	//fk
    public function religions()
    {
        return $this->belongsTo('App\Religion','religion');
    } 	
	
}
