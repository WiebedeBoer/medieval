<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //places tabel
    protected $table = 'places';
    protected $primaryKey = 'place_id';
	
	//fk
    public function regions()
    {
        return $this->belongsTo('App\Region','region');
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
        return $this->hasMany('App\Title','place');
    }
	
}
