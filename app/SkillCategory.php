<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillCategory extends Model
{
    //skills tabel
    protected $table = 'skill_categories';
    protected $primaryKey = 'skill_id';
}
