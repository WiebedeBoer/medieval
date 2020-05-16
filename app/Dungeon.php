<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dungeon extends Model
{
    //dungeons tabel
    protected $table = 'dungeons';
    protected $primaryKey = 'dungeon_id';
	
    public function places()
    {
        return $this->belongsTo('App\Place','place');
    } 
	
    public function masters()
    {
        return $this->belongsTo('App\Person','dungeon_master');
    } 	
	
	//prisoners
	public function prisoners()
    {
        return $this->hasMany('App\Prisoner','dungeon');
    }	
	
}
