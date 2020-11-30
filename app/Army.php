<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Army extends Model
{
    //skills tabel
    protected $table = 'armies';
    protected $primaryKey = 'army_id';
	
    public function marshalls()
    {
        return $this->belongsTo('App\Person','marshall');
    } 	
	
    public function generals()
    {
        return $this->belongsTo('App\Person','general');
    } 
	
    public function lieutenants()
    {
        return $this->belongsTo('App\Person','lieutenant');
    } 

    public function owners()
    {
        return $this->belongsTo('App\Dynasty','owner');
    } 	
	
	public function locations()
    {
        return $this->belongsTo('App\Place','location');
    } 

    //brigades
    public function brigades()
    {
        return $this->hasMany('App\Brigade','army');
    } 
	
	
}
