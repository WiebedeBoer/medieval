<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Furnishing extends Model
{
    //furnishing tabel
    protected $table = 'furnishings';
    protected $primaryKey = 'furnishing_id';
	
    public function rooms()
    {
        return $this->belongsTo('App\Room','room');
    } 
	
}
