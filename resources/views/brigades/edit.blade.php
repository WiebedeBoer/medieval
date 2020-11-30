@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<div class="container">					
<h1>{{ $brigade->brigade }}</h1>
</div> 
<div class="container-fluid justify-content-center">
	<div class="py-5">
    <h2>Army</h2>	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg">Army</th>
		<th class="lg">Training</th>	
		<th class="lg">Morale</th>
	</tr>
	</thead>
	<tbody>	
    <tr>	   
        <td class="pl"><a href="/armies/{{ $brigade->army }}">{{ $brigade->armies->army_name }}</a></td>
        <td class="pl">{{ $brigade->armies->training }}</td>
        <td class="pl">{{ $brigade->armies->morale }}</td>  
	</tr>
</tbody>
</table>
</div>
</div>
<div class="container-fluid justify-content-center">
	<div class="py-5">
    <h2>Brigade</h2>	
	<table class="table-striped tablesorter table">
	<thead>
        <tr>      
            <th class="lg">Captain</th>
            <th class="lg">Brigade</th>
            <th class="lg">Soldiers</th>
            <th class="lg">Training</th>
            <th class="lg">Morale</th>
        </tr>
	</thead>
	<tbody>	
        <tr>
        @if(is_null($brigade->captain))
            <td class="pl">&nbsp;</td>
        @else
            <td class="pl"><a href="/persons/{{ $brigade->captain }}">{{ $brigade->captains->person_name }}</a></td> 
        @endif            
            <td class="pl"><a href="/brigades/{{ $brigade->brigade_id }}">{{ $brigade->brigade }}</a></td> 
            <td class="pl">{{ $brigade->soldiers }}</td> 
            <td class="pl">{{ $brigade->training }}</td> 
            <td class="pl">{{ $brigade->morale }}</td> 
        </tr>
    </tbody>
    </table>
    </div>
</div>
@endsection