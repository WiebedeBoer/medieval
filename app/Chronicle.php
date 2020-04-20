<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chronicle extends Model
{
    //chronicles tabel
    protected $table = 'chronicles';
    protected $primaryKey = 'event_id';
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    } 	

    public function regions()
    {
        return $this->belongsTo('App\Region','region');
    } 
	
    public function places()
    {
        return $this->belongsTo('App\Place','place');
    } 
	
    public function realms()
    {
        return $this->belongsTo('App\Realm','realm');
    } 
	
    public function belligerents()
    {
        return $this->belongsTo('App\Realm','belligerent');
    } 
	
    public function guilds()
    {
        return $this->belongsTo('App\Guild','guild');
    } 
}
