<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruler extends Model
{
    //realm tabel
    protected $table = 'rulers';
    protected $primaryKey = 'cabinet_id';
    
    public function realms()
    {
        return $this->belongsTo('App\Realm','realm');
    } 
    
    public function rulers()
    {
        return $this->belongsTo('App\Person','ruler');
    } 

    public function chancellors()
    {
        return $this->belongsTo('App\Person','chancellor');
    } 

    public function chamberlains()
    {
        return $this->belongsTo('App\Person','chamberlain');
    } 

    public function marshalls()
    {
        return $this->belongsTo('App\Person','marshall');
    } 

    public function admirals()
    {
        return $this->belongsTo('App\Person','admiral');
    } 

    public function stewards()
    {
        return $this->belongsTo('App\Person','steward');
    } 
}
