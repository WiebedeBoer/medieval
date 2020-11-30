@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
<h1>{{ $citizen->citizens->person_name }}</h1>
</div> 

<div class="portrait">
@if($citizen->citizens->gender ==1)
	<div class="py-1">
		<img src="{{ asset('img/portraits/males/'.$citizen->citizens->portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
	</div>
@else
	<div class="py-1">
		<img src="{{ asset('img/portraits/females/'.$citizen->citizens->portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
	</div>	
@endif
</div>

<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg">Citizen</th>
        <th class="lg">Realm</th>
        <th class="lg">Kingdom Turns</th>
	</tr>
	</thead>
	<tbody>	
    <tr>
        <td class="pl"><a href="/persons/{{ $citizen->citizen }}">{{ $citizen->citizens->person_name}}</a></td>   
        <td class="pl"><a href="/realms/{{ $citizen->realm }}">{{ $citizen->realms->realm_name }}</a></td>	
        <td class="pl">{{ $citizen->citizens->kt}}</td>      
	</tr>
</tbody>
</table>
</div>
</div>

<div class="container-fluid justify-content-center">
	<div class="py-5">
    <h2>Citizen Statistics</h2>

    <table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg" colspan="2">Statistic</th>
	</tr>
	</thead>
	<tbody>	
    <tr> 
        <td class="pl">Judgement</td>      
        <td class="pl">{{ $citizen->citizens->jud }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Engineer</td>      
        <td class="pl">{{ $citizen->citizens->eng }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Commerce</td>      
        <td class="pl">{{ $citizen->citizens->com }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Agriculture</td>      
        <td class="pl">{{ $citizen->citizens->agr }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Tactics</td>      
        <td class="pl">{{ $citizen->citizens->tac }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Leadership</td>      
        <td class="pl">{{ $citizen->citizens->lea }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Charisma</td>      
        <td class="pl">{{ $citizen->citizens->cha }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Brawn</td>      
        <td class="pl">{{ $citizen->citizens->bra }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Strength</td>      
        <td class="pl">{{ $citizen->citizens->str }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Agility</td>      
        <td class="pl">{{ $citizen->citizens->agi }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Polearms</td>      
        <td class="pl">{{ $citizen->citizens->pol }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Swordsmanship</td>      
        <td class="pl">{{ $citizen->citizens->swo }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Archery</td>      
        <td class="pl">{{ $citizen->citizens->arc }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Riding</td>      
        <td class="pl">{{ $citizen->citizens->rid }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Sailing</td>      
        <td class="pl">{{ $citizen->citizens->sai }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Raiding</td>      
        <td class="pl">{{ $citizen->citizens->rai }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Tracking</td>      
        <td class="pl">{{ $citizen->citizens->tra }}</td>	      
	</tr>
</tbody>
</table>
    </div>
<div>

@endsection