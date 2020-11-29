<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    //guilds tabel
    protected $table = 'guilds';
    protected $primaryKey = 'guild_id';
	
    public function realms()
    {
        return $this->belongsTo('App\Realm','realm');
    } 
	
    public function places()
    {
        return $this->belongsTo('App\Place','place');
    }

    public function quarters()
    {
        return $this->belongsTo('App\Quarter','quarter');
    }
	
    public function masters()
    {
        return $this->belongsTo('App\Person','master');
    }
	
	//members
	public function members()
    {
        return $this->hasMany('App\GuildMember','guild');
    }		
	
}
