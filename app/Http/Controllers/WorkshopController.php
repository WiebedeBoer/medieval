<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Shop;
use App\Ore;
use App\Good;
use App\Produce;
use App\Product;
use App\Equipment;
use App\Furnishing;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class WorkshopController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
}
