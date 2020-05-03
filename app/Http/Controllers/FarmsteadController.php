<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Farmstead;
use App\Building;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class FarmsteadController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
}
