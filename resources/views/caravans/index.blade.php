@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

@if($caravan_count >=1)
<div class="container">					
	<h1>Caravans List</h1>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $caravans->links() }}
	</div>
</div>
</div>

<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg">Caravan</th>
        <th class="lg">Master</th>
        <th class="lg" colspan="2">Owner</th>
        <th class="lg">Location</th>
        <th class="lg">Sumpter Horses</th>
		<th class="lg">Camels</th>	
		<th class="lg">Oxen</th>
	</tr>
	</thead>
	<tbody>	
    @foreach($caravans as $caravan)
    <tr>
        <td class="pl"><a href="/caravans/{{ $caravan->caravan_id }}">{{ $caravan->caravan_name }}</a></td>
        @if($caravan->master <=2))
            <td class="pl">&nbsp;</td>
        @else
            <td class="pl"><a href="/persons/{{ $caravan->master }}">{{ $caravan->masters->person_name }}</a></td>
        @endif	   
        @if($caravan->owner <=2)
            <td class="pl">&nbsp;</td>
            <td class="pl"><a href="/dynasty/{{ $caravan->dynasty }}">{{ $building->owners->dynasty_name }}</a></td>   
        @else
            <td class="pl"><a href="/persons/{{ $caravan->owner }}">{{ $caravan->owners->person_name }}</a></td>
            <td class="pl"><a href="/dynasty/{{ $caravan->dynasty }}">{{ $building->owners->dynasty_name }}</a></td>   
        @endif         
        <td class="pl"><a href="/place/{{ $caravan->place }}">{{ $caravan->places->place_name }}</a></td>	   
        <td class="pl">{{ $caravan->sumpter }}</td>
        <td class="pl">{{ $caravan->camel }}</td> 
        <td class="pl">{{ $caravan->oxen }}</td>    
	</tr>
    @endforeach
</tbody>
<thead>
	<tr>
        <th class="lg">Caravan</th>
        <th class="lg">Master</th>
        <th class="lg" colspan="2">Owner</th>
        <th class="lg">Location</th>
        <th class="lg">Sumpter Horses</th>
		<th class="lg">Camels</th>	
		<th class="lg">Oxen</th>
	</tr>
	</thead>
</table>
</div>
</div>

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $caravans->links() }}
	</div>
</div>
</div>
@else
<div class="container">					
	<h1>Caravans List</h1>
    <p>No caravans</p>
</div>
@endif

@endsection