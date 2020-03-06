<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }	
	
	//forum list
    public function index()
    {       

        return view('forum.index');        
    }
}
