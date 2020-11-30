@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
@if($army_count >=1)
<div class="container">					
	<h1>Armies List</h1>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $armies->links() }}
	</div>
</div>
</div>

<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Army</th>
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
@foreach($armies as $army)
    <tr>
	    <td class="plname"><a href="/armies/{{ $army->army_id }}">{{ $army->army_name }}</a></td>
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
	    <td class="pl"><a href="/dynasty/{{ $army->owner }}">{{ $building->owners->dynasty_name }}</a></td>
        <td class="pl">{{ $army->training }}</td>
        <td class="pl">{{ $army->morale }}</td> 
        <td class="pl">{{ $army->brigades->count() }}</td>    
	</tr>
@endforeach
</tbody>
	<thead>
	<tr>
        <th class="lg">Army</th>
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
</table>
</div>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $armies->links() }}
	</div>
</div>
</div>
@else
<div class="container">					
	<h1>Armies List</h1>
    <p>No armies</p>
</div>
@endif
@endsection