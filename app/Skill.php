<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //skills tabel
    protected $table = 'skills';
    protected $primaryKey = 'skill_id';
	
    public function persons()
    {
        return $this->belongsTo('App\Person','person');
    } 
	
    public function types()
    {
        return $this->belongsTo('App\SkillCategory','skill');
    } 
	
}
