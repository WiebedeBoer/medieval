<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarter extends Model
{
    //cultures tabel
    protected $table = 'quarters';
    protected $primaryKey = 'quarter_id';
	
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

    public function cities()
    {
        return $this->belongsTo('App\Place','place');
    } 

    public function categories()
    {
        return $this->belongsTo('App\QuarterCategory','quarter_category');
    } 
	
}
