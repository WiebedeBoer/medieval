@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<!--person portrait-->
<div class="portrait">
@if($persondata->gender ==1)
	<div class="py-1">
		<img src="{{ asset('img/portraits/males/'.$persondata->portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
	</div>
@else
	<div class="py-1">
		<img src="{{ asset('img/portraits/females/'.$persondata->portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
	</div>	
@endif
</div>
<!--person full name-->
<div class="personname">
@if($persondata->gender ==0 && $persondata->spouse !=0)
	Name: {{$persondata->person_name}} <a href="/dynasty/{{$persondata->dynasty}}">{{$persondata->dynasties->dynasty_name}}</a> - <a href="/dynasty/{{$maiden_id}}">{{$maiden_name}}</a>
@else
	Name: {{$persondata->person_name}} <a href="/dynasty/{{$persondata->dynasty}}">{{$persondata->dynasties->dynasty_name}}</a>	
@endif
</div>
<!--person culture-->
<div class="culture">
</div>
<!--person religion-->
<div class="religion">
</div>
<!--person place-->
<div class="place">
</div>
<!--person home-->
<div class="house">
</div>

<!--father-->
<div class="father">
@if($persondata->father !=0)
	Father: <a href="/persons/{{$persondata->father}}">{{$persondata->fathers->person_name}}</a> <a href="/dynasty/{{$persondata->dynasty}}">{{$persondata->dynasties->dynasty_name}}</a>
	<img src="{{ asset('img/portraits/males/'.$persondata->fathers->portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
@endif
</div>
<!--mother-->
<div class="mother">
@if($persondata->mother !=0)
	@if($mothermaidendata->father !=0)
		Mother: <a href="/persons/{{$persondata->mother}}">{{$persondata->mothers->person_name}}</a> <a href="/dynasty/{{$persondata->dynasty}}">{{$persondata->dynasties->dynasty_name}}</a> - <a href="/dynasty/{{$mother_maiden_id}}">{{$mother_maiden_name}}
	@else
		Mother: <a href="/persons/{{$persondata->mother}}">{{$persondata->mothers->person_name}}</a> <a href="/dynasty/{{$persondata->dynasty}}">{{$persondata->dynasties->dynasty_name}}</a>
	@endif
	<img src="{{ asset('img/portraits/females/'.$persondata->mothers->portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
@endif
</div>
<!--children-->
<div class="kids">
</div>
<!--siblings-->
<div class="siblings">
</div>
<!--liege-->
<div class="liege">
</div>
<!--vassals-->
<div class="vassals">
</div>

<!--statistics-->
<div class="container-fluid justify-content-center">
	<div class="py-5">
    <h2>Statistics</h2>

    <table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg" colspan="2">Statistic</th>
	</tr>
	</thead>
	<tbody>	
    <tr> 
        <td class="pl">Judgement</td>      
        <td class="pl">{{ $persondata->jud }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Engineer</td>      
        <td class="pl">{{ $persondata->eng }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Commerce</td>      
        <td class="pl">{{ $persondata->com }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Agriculture</td>      
        <td class="pl">{{ $persondata->agr }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Tactics</td>      
        <td class="pl">{{ $persondata->tac }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Leadership</td>      
        <td class="pl">{{ $persondata->lea }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Charisma</td>      
        <td class="pl">{{ $persondata->cha }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Brawn</td>      
        <td class="pl">{{ $persondata->bra }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Strength</td>      
        <td class="pl">{{ $persondata->str }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Agility</td>      
        <td class="pl">{{ $persondata->agi }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Polearms</td>      
        <td class="pl">{{ $persondata->pol }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Swordsmanship</td>      
        <td class="pl">{{ $persondata->swo }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Archery</td>      
        <td class="pl">{{ $persondata->arc }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Riding</td>      
        <td class="pl">{{ $persondata->rid }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Sailing</td>      
        <td class="pl">{{ $persondata->sai }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Raiding</td>      
        <td class="pl">{{ $persondata->rai }}</td>	      
	</tr>
    <tr> 
        <td class="pl">Tracking</td>      
        <td class="pl">{{ $persondata->tra }}</td>	      
	</tr>
</tbody>
</table>
    </div>
<div>

@endsection