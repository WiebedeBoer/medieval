@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Pork &amp; Poultry View)</h1>
@include('region.mapmenu')
<div class="wmin">
<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg width="3000" height="2516" viewBox="0 0 3000 2516" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map" class="worldmap" zoomAndPan="magnify">
<g z-index="1">
<image xlink:href="{{ asset('img/maps/good.png') }}" x="0" y="0" width="auto" height="auto">
</g>
@foreach($placedata as $place)
	<g z-index="2">
	@if($place->commerce =="duck")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (duck)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(180,205,199)" />
		</a>
    @elseif($place->commerce =="poultry")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (chicken)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(192,0,0)" stroke-width="2" fill="rgb(192,92,0)" />
		</a>
    @elseif($place->commerce =="pigs")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (pork)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(192,0,0)" stroke-width="2" fill="rgb(92,0,0)" />
		</a>
	@else
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(0,0,0)" />
		</a>
	@endif
	</g>		
@endforeach
</svg>
</div>
@endsection