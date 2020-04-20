<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    //citizens tabel
    protected $table = 'citizens';
    protected $primaryKey = 'citizen_id';
	
    public function citizens()
    {
        return $this->belongsTo('App\Person','citizen');
    } 
	
	public function realms()
    {
        return $this->belongsTo('App\Realm','realm');
    }	
}
