@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
	<h1>{{ $placedata->place_name }}</h1>

	<div class="d-flex justify-content-center">
	<div class="m-1"><a href="/place/{{$id}}">Show</a></div>
	</div>

	<div class="d-flex justify-content-center">
	<div class="m-1">Region: <a href="/region/{{ $placedata->regions->region_id }}">{{ $placedata->regions->region_name }}</a></div>

	<div class="m-1">Culture: <a href="/culture/{{ $culture->culture_id }}">{{ $culture->culture_name }}</a></div>
	</div>

	<div class="d-flex justify-content-center">
	<div class="m-1"><a href="/building/create/{{ $id }}">Create New Building</a></div>
	</div>

	@if($building_count >=1)
		<div class="m-5">
		@foreach($buildings as $building)
			<div class="m-1"><a href="/building/{{ $building->building_id }}/edit">{{ $building->building_name }}</a></div>
		@endforeach
		</div>
	@endif

@endsection