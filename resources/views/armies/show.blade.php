@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<div class="container">					
<h1>{{ $army->army_name }}</h1>
</div> 

<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg">Marshall</th>
        <th class="lg">General</th>
        <th class="lg">Lieutenant</th>
        <th class="lg">Location</th>
        <th class="lg">Owner</th>
		<th class="lg">Training</th>	
		<th class="lg">Morale</th>
        <th class="lg">Brigades</th>
	</tr>
	</thead>
	<tbody>	
    <tr>	   
        @if(is_null($army->marshall))
            <td class="pl">&nbsp;</td>
        @else
            <td class="pl"><a href="/persons/{{ $army->marshall }}">{{ $army->marshalls->person_name }}</a></td>
        @endif        
        @if(is_null($army->general))
            <td class="pl">&nbsp;</td>
        @else
            <td class="pl"><a href="/persons/{{ $army->general }}">{{ $army->generals->person_name }}</a></td>
        @endif
        @if(is_null($army->lieutenant))
            <td class="pl">&nbsp;</td>
        @else
            <td class="pl"><a href="/persons/{{ $army->lieutenant }}">{{ $army->lieutenants->person_name }}</a></td>
        @endif        
        <td class="pl"><a href="/place/{{ $army->location }}">{{ $army->locations->place_name }}</a></td>
	    <td class="pl"><a href="/dynasty/{{ $army->owner }}">{{ $army->owners->dynasty_name }}</a></td>
        <td class="pl">{{ $army->training }}</td>
        <td class="pl">{{ $army->morale }}</td> 
        <td class="pl">{{ $army->brigades->count() }}</td>    
	</tr>
</tbody>
</table>
</div>
</div>


@if(@brigade_count >=1)
<div class="container-fluid justify-content-center">
	<div class="py-5">
    <h2>Brigades</h2>	
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
    @foreach($brigades as $brigade)
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
    @endforeach
    </tbody>
    </table>
    </div>
</div>
@endif
@endsection