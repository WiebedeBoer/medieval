<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quarter;
use App\Place;
use App\Building;
use App\Room;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class BuildingController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
}
