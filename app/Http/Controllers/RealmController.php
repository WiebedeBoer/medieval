<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Realm;
use App\Citizen;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class RealmController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
}
