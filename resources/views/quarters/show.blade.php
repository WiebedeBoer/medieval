@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')


<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<h1>{{ $quarter->categories->quarter_name }} Quarter</h1>
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Place</th>
        <th class="lg">Region</th>
		<th class="lg">Coordinates</th>	
		<th class="lg">Category</th>
	</tr>
	</thead>
	<tbody>	
    <tr>
	    <td class="plname"><a href="/place/{{ $quarter->place }}">{{ $quarter->cities->place_name }}</a></td>
	    <td class="pl"><a href="/region/{{ $quarter->region }}">{{ $quarter->regions->region_name }}</a></td>
        <td class="pl">{{ $quarter->x }},{{ $quarter->y }}</td>
        <td class="pl">{{ $quarter->categories->quarter_name }}</td>
	</tr>
</tbody>
</table>
</div>
</div>

@if($building_count >=1)

<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<h2>Buildings</h2>
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Name</th>
        <th class="lg">Category</th>
		<th class="lg">Type</th>	
	</tr>
	</thead>
	<tbody>	
	@foreach($buildings as $building)
    <tr>
	    <td class="plname"><a href="/buildings/{{ $building->building_id }}">{{ $building->building_name }}</a></td>
	    <td class="pl">{{ $building->types->building_name }}</td>
		<td class="pl">{{ $building->types->building_type }}</td>
	</tr>
	@endforeach
</tbody>
</table>
</div>
</div>
@endif

@endsection