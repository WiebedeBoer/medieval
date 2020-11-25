@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container-fluid justify-content-center">
	<div class="py-5">	
    <h1>{{ $building->building_name }}</h1>
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Region</th>
        <th class="lg">Place</th>
		<th class="lg">Quarter</th>	
        <th class="lg">Building</th>
		<th class="lg">Category</th>
        <th class="lg">Type</th>
	</tr>
	</thead>
	<tbody>	
    <tr>
        <td class="pl"><a href="/region/{{ $building->region }}">{{ $building->places->place_name }}</a></td>
	    <td class="pl"><a href="/place/{{ $building->place }}">{{ $building->regions->region_name }}</a></td>
        <td class="pl"><a href="/quarters/{{ $building->quarter }}">{{ $building->quarters->quarter_name }}</td>
        <td class="plname"><a href="/buildings/{{ $building->building_id }}">{{ $building->building_name }}</a></td>
	    <td class="pl">{{ $building->types->building_name }}</td>
		<td class="pl">{{ $building->types->building_type }}</td>
	</tr>
</tbody>
</table>
</div>
</div>

@if($room_count >=1)
<div class="container-fluid justify-content-center">
	<div class="py-5">	
    <h2>Rooms</h2>
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Name</th>
        <th class="lg">Category</th>	
	</tr>
	</thead>
	<tbody>	
	@foreach($rooms as $room)
    <tr>
	    <td class="plname"><a href="/rooms/{{ $room->room_id }}">{{ $room->room_name }}</a></td>
	    <td class="pl">{{ $room->room_category }}</td>
	</tr>
	@endforeach
</tbody>
</table>
</div>
</div>
@endif

@endsection