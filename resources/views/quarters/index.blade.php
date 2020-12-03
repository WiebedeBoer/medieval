@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
	<h1>Quarters List</h1>
</div>
@include('chronicles.chartmenu')

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $quarters->links() }}
	</div>
</div>
</div>
<div class="container-fluid justify-content-center">
	<div class="py-5">	
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
@foreach($quarters as $quarter)
    <tr>
	    <td class="plname"><a href="/place/{{ $quarter->place }}">{{ $quarter->cities->place_name }}</a></td>
	    <td class="pl"><a href="/region/{{ $quarter->region }}">{{ $quarter->regions->region_name }}</a></td>
        <td class="pl"><a href="/quarters/{{ $quarter->quarter_id }}">{{ $quarter->x }},{{ $quarter->y }}</a></td>
        <td class="pl">{{ $quarter->categories->quarter_name }}</td>
	</tr>
@endforeach
</tbody>
	<thead>
	<tr>
        <th class="lg">Place</th>
        <th class="lg">Region</th>
		<th class="lg">Coordinates</th>
		<th class="lg">Category</th>
	</tr>
	</thead>
</table>
</div>
</div>

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $quarters->links() }}
	</div>
</div>
</div>
@endsection