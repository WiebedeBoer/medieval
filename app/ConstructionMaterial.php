<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConstructionMaterial extends Model
{
    //construction materials tabel
    protected $table = 'construction_materials';
    protected $primaryKey = 'material_id';
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    }
}
