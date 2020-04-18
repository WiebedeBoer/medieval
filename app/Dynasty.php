<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dynasty extends Model
{
    //places tabel
    protected $table = 'dynasties';
    protected $primaryKey = 'dynasty_id';
	
    public function cultures()
    {
        return $this->belongsTo('App\Culture','culture');
    } 
	
    public function owners()
    {
        return $this->belongsTo('App\User','dynasty_owner');
    } 	
	
	public function rulers()
    {
        return $this->belongsTo('App\Person','ruler');
    } 
	
	public function heirs()
    {
        return $this->belongsTo('App\Person','heir');
    } 
	
}
