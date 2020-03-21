@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

					<h1>{{ $placedata->place_name }}</h1>

	<div><a href="/region/{{ $placedata->regions->region_id }}">{{ $placedata->regions->region_name }}</a></div>
	<div><a href="/culture/{{ $culture->culture_id }}">{{ $culture->culture_name }}</a></div>


@endsection