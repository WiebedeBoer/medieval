<?php

namespace App\Http\Controllers;
use App\User;
use App\Dynasty;
use App\Person;

use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
		$user_id = $user->id;
		$dynastycount = Dynasty::where('dynasty_owner', $user_id)->count();
		$portraitcount = Person::where('owner', $user_id)->where('alive',1)->count();

		//return
		return view('home', compact('dynastycount','portraitcount'));
    }
}
