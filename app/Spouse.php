<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{
    //spouses tabel
    protected $table = 'spouses';
    protected $primaryKey = 'marriage_id';
	
    public function husbands()
    {
        return $this->belongsTo('App\Person','husband');
    } 
	
    public function wives()
    {
        return $this->belongsTo('App\Person','wife');
    } 
}
