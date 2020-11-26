@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
					<h1>Rooms List</h1>
					</div>

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $rooms->links() }}
	</div>
</div>
</div>
<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Room</th>
        <th class="lg">Category</th>
        <th class="lg">Building</th>
	</tr>
	</thead>
	<tbody>	
@foreach($rooms as $room)
    <tr>
	    <td class="plname"><a href="/rooms/{{ $room->room_id }}">{{ $room->room_name }}</a></td>
        <td class="pl">{{ $room->room_category }}</td>
	    <td class="pl"><a href="/buildings/{{ $room->building }}">{{ $room->buildings->building_name }}</a></td>        
	</tr>
@endforeach
</tbody>
	<thead>
	<tr>
        <th class="lg">Room</th>
        <th class="lg">Category</th>
        <th class="lg">Building</th>
	</tr>
	</thead>
</table>
</div>
</div>

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $rooms->links() }}
	</div>
</div>
</div>

@endsection