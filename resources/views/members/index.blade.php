@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

@if($member_count >=1)
<div class="container">					
	<h1>Members List</h1>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $members->links() }}
	</div>
</div>
</div>

<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg">Member</th>
        <th class="lg">Guild</th>
        <th class="lg">Kingdom Turns</th>
        <th class="lg">Personal Turns</th>
	</tr>
	</thead>
	<tbody>
    @foreach($members as $member)	
    <tr>
        <td class="pl"><a href="/persons/{{ $member->member }}">{{ $member->members->person_name}}</a></td>   
        <td class="pl"><a href="/guilds/{{ $member->guild }}">{{ $member->guilds->guild_name }}</a></td>	
        <td class="pl">{{ $member->members->kt}}</td> 
        <td class="pl">{{ $member->members->pt}}</td>      
	</tr>
    @endforeach
</tbody>
<thead>
	<tr>
        <th class="lg">Member</th>
        <th class="lg">Guild</th>
        <th class="lg">Kingdom Turns</th>
        <th class="lg">Personal Turns</th>
	</tr>
	</thead>
</table>
</div>
</div>

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $members->links() }}
	</div>
</div>
</div>
@else
<div class="container">					
	<h1>Members List</h1>
    <p>No members</p>
</div>
@endif

@endsection