<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Guild;
use App\GuildMember;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	//main 
    public function index()
    {            	
		$members = GuildMember::with('members','guilds')->get();
		$user = auth()->user();
		return view('citizens.index', compact('members','user'));        
    }
	
	//show
    public function show($id)
    {       
        $member = GuildMember::with('members','guilds')->where('member_id', $id)->firstOrFail();
		$user = auth()->user();
		return view('citizens.show', compact('member','user'));        
    }
}
