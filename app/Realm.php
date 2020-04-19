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
	
    public function owners()
    {
        return $this->belongsTo('App\User','owner');
    } 
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    } 

    public function rulers()
    {
        return $this->belongsTo('App\Person','ruler');
    } 

    public function chancellors()
    {
        return $this->belongsTo('App\Person','chancellor');
    } 

    public function chamberlains()
    {
        return $this->belongsTo('App\Person','chamberlain');
    } 

    public function marshalls()
    {
        return $this->belongsTo('App\Person','marshall');
    } 

    public function admirals()
    {
        return $this->belongsTo('App\Person','admiral');
    } 

    public function stewards()
    {
        return $this->belongsTo('App\Person','steward');
    } 

    public function capitals()
    {
        return $this->belongsTo('App\Place','capital');
    } 

	//citizens
	public function citizens()
    {
        return $this->hasMany('App\Person','realm');
    }

	//guilds
	public function guilds()
    {
        return $this->hasMany('App\Guild','realm');
    }		
	
}
