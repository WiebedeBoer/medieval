<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    //votes tabel
    protected $table = 'votes';
    protected $primaryKey = 'vote_id';
	
    public function titles()
    {
        return $this->belongsTo('App\Title','title');
    } 
	
    public function holders()
    {
        return $this->belongsTo('App\Person','dynasty');
    } 

    public function voters()
    {
        return $this->belongsTo('App\Person','voter');
    } 

    public function candidates()
    {
        return $this->belongsTo('App\Person','candidate');
    } 
}
