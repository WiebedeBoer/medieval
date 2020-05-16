<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brigade extends Model
{
    //skills tabel
    protected $table = 'brigades';
    protected $primaryKey = 'brigade_id';
	
    public function armies()
    {
        return $this->belongsTo('App\Army','army');
    } 	
	
    public function captains()
    {
        return $this->belongsTo('App\Person','captain');
    } 
}
