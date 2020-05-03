<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\Room;
use App\Furnishing;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
}
