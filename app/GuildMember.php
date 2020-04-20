<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuildMember extends Model
{
    //guild members tabel
    protected $table = 'guild_members';
    protected $primaryKey = 'member_id';
	
    public function members()
    {
        return $this->belongsTo('App\Person','member');
    } 
	
	public function guilds()
    {
        return $this->belongsTo('App\Guild','guild');
    }	
}
