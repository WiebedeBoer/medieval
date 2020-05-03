<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guild;
use App\GuildMember;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class GuildController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
}
