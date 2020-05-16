<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Army;
use App\Brigade;
use App\Person;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class BrigadeController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	//main 
    public function index()
    {            	
		$brigades = Brigade::with('armies','captains')->get();
		$user = auth()->user();
		return view('brigades.index', compact('brigades','user'));        
    }
	
	//show
    public function show($id)
    {       
        $brigade = Brigade::with('armies','captains')->where('brigade_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('brigades.show', compact('brigade','user'));        
    }
}
