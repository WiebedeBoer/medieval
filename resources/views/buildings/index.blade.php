@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
					<h1>Buildings List</h1>
					</div>

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $buildings->links() }}
	</div>
</div>
</div>
<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Building</th>
        <th class="lg">Category</th>
        <th class="lg">Region</th>
		<th class="lg">Place</th>	
		<th class="lg">Quarter</th>
	</tr>
	</thead>
	<tbody>	
@foreach($buildings as $building)
    <tr>
	    <td class="plname"><a href="/building/{{ $building->building_id }}">{{ $building->building_name }}</a></td>
        <td class="pl">{{ $building->types->building_name }}</td>
	    <td class="pl"><a href="/region/{{ $building->region }}">{{ $building->regions->region_name }}</a></td>
        <td class="pl"><a href="/place/{{ $building->place }}">{{ $building->places->place_name }}</a></td>
        <td class="pl"><a href="/quarters/{{ $building->quarter }}">{{ $building->quarters->quarter_name }}</a></td>
        
	</tr>
@endforeach
</tbody>
	<thead>
	<tr>
    <th class="lg">Building</th>
        <th class="lg">Category</th>
        <th class="lg">Region</th>
		<th class="lg">Place</th>	
		<th class="lg">Quarter</th>
	</tr>
	</thead>
</table>
</div>
</div>

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $buildings->links() }}
	</div>
</div>
</div>

@endsection