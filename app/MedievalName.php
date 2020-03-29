<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedievalName extends Model
{
    //regions tabel
    protected $table = 'medieval_names';
    protected $primaryKey = 'name_id';
}
