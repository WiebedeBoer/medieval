@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
<h1>{{ $member->members->person_name }}</h1>
</div> 

<div class="portrait">
@if($member->members->gender ==1)
	<div class="py-1">
		<img src="{{ asset('img/portraits/males/'.$member->members->portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
	</div>
@else
	<div class="py-1">
		<img src="{{ asset('img/portraits/females/'.$member->members->portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
	</div>	
@endif
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
    <tr>
        <td class="pl"><a href="/persons/{{ $member->member }}">{{ $member->members->person_name}}</a></td>   
        <td class="pl"><a href="/guilds/{{ $member->guild }}">{{ $member->guilds->guild_name }}</a></td>	
        <td class="pl">{{ $member->members->kt}}</td> 
        <td class="pl">{{ $member->members->pt}}</td>      
	</tr>
</tbody>
</table>
</div>
</div>

<div class="container-fluid justify-content-center">
	<div class="py-5">
    <h2>Member Statistics</h2>

    <table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg" colspan="2">Statistic</th>
	</tr>
	</thead>
	<tbody>	
    <tr> 
        <td class="pl">Judgement</td>      
        <td class="pl">{{ $member->members->jud }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Engineer</td>      
        <td class="pl">{{ $member->members->eng }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Commerce</td>      
        <td class="pl">{{ $member->members->com }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Agriculture</td>      
        <td class="pl">{{ $member->members->agr }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Tactics</td>      
        <td class="pl">{{ $member->members->tac }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Leadership</td>      
        <td class="pl">{{ $member->members->lea }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Charisma</td>      
        <td class="pl">{{ $member->members->cha }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Brawn</td>      
        <td class="pl">{{ $member->members->bra }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Strength</td>      
        <td class="pl">{{ $member->members->str }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Agility</td>      
        <td class="pl">{{ $member->members->agi }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Polearms</td>      
        <td class="pl">{{ $member->members->pol }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Swordsmanship</td>      
        <td class="pl">{{ $member->members->swo }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Archery</td>      
        <td class="pl">{{ $member->members->arc }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Riding</td>      
        <td class="pl">{{ $member->members->rid }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Sailing</td>      
        <td class="pl">{{ $member->members->sai }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Raiding</td>      
        <td class="pl">{{ $member->members->rai }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Tracking</td>      
        <td class="pl">{{ $member->members->tra }}</td>	      
	</tr>
</tbody>
</table>
    </div>
<div>

@endsection