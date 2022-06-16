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
	
	//main 
    public function index()
    {            	
		$shops = Shop::with('dynasties','places','owners','masters','resources')->get();
		$user = auth()->user();
		return view('shops.index', compact('shops','user'));        
    }
	
	//show
    public function show($id)
    {       
        $shop = Shop::with('dynasties','places','owners','masters','resources')->where('shop_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('shops.show', compact('shop','user'));        
    }	

	//edit
    public function edit($id)
    {       
        $shop = Shop::with('dynasties','places','owners','masters','resources')->where('shop_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('shops.show', compact('shop','user'));        
    }	
	
}
