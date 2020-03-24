<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //regions tabel
    protected $table = 'regions';
    protected $primaryKey = 'region_id';
	
	//fk
    public function cultures()
    {
        return $this->belongsTo('App\Culture','culture');
    } 	
	
	public function owners()
    {
        return $this->belongsTo('App\User','dynasty_owner');
    }

	public function lordparamount()
    {
        return $this->belongsTo('App\User','lord_paramount');
    } 
	
	public function tenantinchief()
    {
        return $this->belongsTo('App\User','tenant_in_chief');
    } 

	public function mesnelord()
    {
        return $this->belongsTo('App\User','mesne_lord');
    } 

	public function tenantparavail()
    {
        return $this->belongsTo('App\User','tenant_paravail');
    } 
	
	public function allodialowner()
    {
        return $this->belongsTo('App\User','allodial_owner');
    } 

	public function tenureowner()
    {
        return $this->belongsTo('App\User','tenure_owner');
    } 

	//titles
    public function titles()
    {
        return $this->hasMany('App\Title','region');
    }	

	//places
    public function places()
    {
        return $this->hasMany('App\Place','region');
    }	
	
}
