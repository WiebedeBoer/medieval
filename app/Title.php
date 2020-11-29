<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    //skills tabel
    protected $table = 'titles';
    protected $primaryKey = 'title_id';
	
    public function owners()
    {
        return $this->belongsTo('App\Person','owner');
    } 
	
    public function holders()
    {
        return $this->belongsTo('App\Person','holder');
    } 

    public function heirs()
    {
        return $this->belongsTo('App\Person','heir');
    } 

    public function regions()
    {
        return $this->belongsTo('App\Region','region');
    } 

	public function places()
    {
        return $this->belongsTo('App\Place','place');
    } 

	public function quarters()
    {
        return $this->belongsTo('App\Quarter','quarter');
    } 

    public function religions()
    {
        return $this->belongsTo('App\Religion','religion');
    } 
	
}
