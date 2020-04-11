<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarriageProposal extends Model
{
    //people tabel
    protected $table = 'marriage_proposals';
    protected $primaryKey = 'id';
	
	public function proposers()
    {
        return $this->belongsTo('App\Person','proposer');
    }
	
	public function spouses()
    {
        return $this->belongsTo('App\Person','spouse');
    }
	
}