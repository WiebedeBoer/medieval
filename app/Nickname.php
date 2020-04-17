<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nickname extends Model
{
    //people tabel
    protected $table = 'nicknames';
    protected $primaryKey = 'nickname_id';
	
}
