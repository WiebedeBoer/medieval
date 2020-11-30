<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //people tabel
    protected $table = 'people';
    protected $primaryKey = 'person_id';
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    } 
	
    public function owners()
    {
        return $this->belongsTo('App\User','owner');
    }

    public function cultures()
    {
        return $this->belongsTo('App\Culture','culture');
    }  
	
    public function marrieddynasties()
    {
        return $this->belongsTo('App\Dynasty','married');
    } 

    public function nicknames()
    {
        return $this->belongsTo('App\Nickname','nickname');
    } 
	
    public function places()
    {
        return $this->belongsTo('App\Place','place');
    } 

    public function homes()
    {
        return $this->belongsTo('App\Place','home');
    } 
	
    public function religions()
    {
        return $this->belongsTo('App\Religion','religion');
    } 
	
	//citizens
    public function realms()
    {
        return $this->hasMany('App\Realm','citizen');
    } 
	
	//guild members
    public function guildmembers()
    {
        return $this->hasMany('App\Guild','member');
    } 
	
	//husbands
	public function husbands()
    {
        return $this->hasMany('App\Spouse','husband');
    }		

	//wives
	public function wives()
    {
        return $this->hasMany('App\Spouse','wife');
    }	

	//fathers
	public function fathers()
    {
        return $this->hasMany('App\Parent','father');
    }

	//mothers
	public function mothers()
    {
        return $this->hasMany('App\Parent','mother');
    }	
	
	//kids
	public function kids()
    {
        return $this->hasMany('App\Parent','child');
    }	
	
}
