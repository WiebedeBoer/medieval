<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Shop;
use App\Ore;
use App\Good;
use App\Produce;
use App\Product;
use App\Equipment;
use App\Furnishing;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class WorkshopController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }

	//main 
    public function index()
    {            	
        $shops = Shop::with('dynasties','places','owners','masters','resources')->orderBy('place','ASC')->paginate(50);
        $shop_count = Shop::count();
		$user = auth()->user();
		return view('shops.index', compact('shops','user','shop_count'));        
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
		return view('shops.edit', compact('shop','user'));        
    }

}
