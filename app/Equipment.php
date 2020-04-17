<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    //equipment tabel
    protected $table = 'equipment';
    protected $primaryKey = 'equipment_id';
	
	public function owners()
    {
        hasMany('App\Person', 'owner');
    } 	
	
	public function types()
    {
        hasMany('App\EquipmentCategory', 'category');
    } 	
	
}
