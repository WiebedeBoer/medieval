<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmstead extends Model
{
    //cultures tabel
    protected $table = 'farmsteads';
    protected $primaryKey = 'farmstead_id';
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    } 

    public function regions()
    {
        return $this->belongsTo('App\Region','region');
    } 

    public function owners()
    {
        return $this->belongsTo('App\Person','owner');
    }	
	
    public function masters()
    {
        return $this->belongsTo('App\Person','master');
    }

    public function steadnames()
    {
        return $this->belongsTo('App\SteadName','farmstead_name');
    } 	
	
}
