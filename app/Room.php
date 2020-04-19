<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //places tabel
    protected $table = 'rooms';
    protected $primaryKey = 'room_id';
	
    public function buildings()
    {
        return $this->belongsTo('App\Building','building');
    } 
	
	//rooms
	public function furnishings()
    {
        return $this->hasMany('App\Furnishing','room');
    }		
	
}
