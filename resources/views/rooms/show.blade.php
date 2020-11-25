@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container-fluid justify-content-center">
	<div class="py-5">	
    <h1>{{ $room->room_name }}</h1>
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Name</th>
        <th class="lg">Category</th>
        <th class="lg">Building</th>	
	</tr>
	</thead>
	<tbody>	
    <tr>
	    <td class="plname">{{ $room->room_name }}</td>
	    <td class="pl">{{ $room->room_category }}</td>
        <td class="pl"><a href="/buildings/{{ $room->building }}">{{ $room->buildings->building_name }}</a></td>
	</tr>
</tbody>
</table>
</div>
</div>

@if($furnishing_count >=1)
<div class="container-fluid justify-content-center">
	<div class="py-5">	
    <h2>Furnishings</h2>
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Name</th>
        <th class="lg">Category</th>
        <th class="lg">Quality</th>	
	</tr>
	</thead>
	<tbody>	
	@foreach($furnishings as $furnishing)
    <tr>
	    <td class="plname">{{ $furnishing->furnishing_name }}</td>
	    <td class="pl">{{ $furnishing->furnishing_category }}</td>
        <td class="pl">{{ $furnishing->quality }}</td>
	</tr>
	@endforeach
</tbody>
</table>
</div>
</div>
@endif


@endsection