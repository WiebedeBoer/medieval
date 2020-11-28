<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realm extends Model
{
    //realm tabel
    protected $table = 'realms';
    protected $primaryKey = 'realm_id';
	
    public function cultures()
    {
        return $this->belongsTo('App\Culture','culture');
    } 
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    } 

	//citizens
	public function citizens()
    {
        return $this->hasMany('App\Citizen','realm');
    }

	//guilds
	public function guilds()
    {
        return $this->hasMany('App\Guild','realm');
    }	
    
	//places
    public function places()
    {
        return $this->hasMany('App\Place','realm');
    }

    //capitals
    public function capitals()
    {
        return $this->hasOne('App\Capital','realm');       
    } 

	//rulers
    public function rulers()
    {
        return $this->hasOne('App\Ruler', 'realm');
    }
	
}
