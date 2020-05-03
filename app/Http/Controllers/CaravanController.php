<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fleet;
use App\Place;
use App\Cargo;
use App\Caravan;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class CaravanController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
}
