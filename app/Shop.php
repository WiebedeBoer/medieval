<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //shops tabel
    protected $table = 'shops';
    protected $primaryKey = 'shop_id';
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    }
	
    public function places()
    {
        return $this->belongsTo('App\Place','place');
    } 

    public function owners()
    {
        return $this->belongsTo('App\User','owner');
    }

    public function masters()
    {
        return $this->belongsTo('App\User','master');
    }	
	
    public function resources()
    {
        return $this->belongsTo('App\ResourceType','resource');
    } 
	
}
