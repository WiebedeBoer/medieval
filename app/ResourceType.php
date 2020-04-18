<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourceType extends Model
{
    //resource types tabel
    protected $table = 'resource_types';
    protected $primaryKey = 'resource_id';
}
