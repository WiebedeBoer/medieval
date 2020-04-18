<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //products tabel
    protected $table = 'products';
    protected $primaryKey = 'product_id';
	
    public function dynasties()
    {
        return $this->belongsTo('App\Dynasty','dynasty');
    }
}
