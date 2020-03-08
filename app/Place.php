<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //places tabel
    protected $table = 'places';
    protected $primaryKey = 'place_id';
}
