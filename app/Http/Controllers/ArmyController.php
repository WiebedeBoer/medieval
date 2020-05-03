<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Army;
use App\Brigade;
use App\Place;
use App\Person;
use App\Realm;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class ArmyController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
}
