<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Building;
use App\Room;
use App\Guild;
use App\Ore;
use App\Good;
use App\Produce;
use App\Product;
use App\Shop;
use App\Equipment;
use App\Furnishing;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class MarketController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
}
