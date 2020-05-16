<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prisoner extends Model
{
    //prisoners tabel
    protected $table = 'prisoners';
    protected $primaryKey = 'prisoner_id';
	
    public function dungeons()
    {
        return $this->belongsTo('App\Dungeon','dungeon');
    } 
	
    public function captives()
    {
        return $this->belongsTo('App\Person','prisoner');
    } 
}
