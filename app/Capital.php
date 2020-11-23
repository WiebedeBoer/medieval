<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capital extends Model
{
    //citizens tabel
    protected $table = 'capitals';
    protected $primaryKey = 'capital_id';
	
    public function capitals()
    {
        return $this->belongsTo('App\Place','capital');
    } 
	
	public function realms()
    {
        return $this->belongsTo('App\Realm','realm');
    }	
}
