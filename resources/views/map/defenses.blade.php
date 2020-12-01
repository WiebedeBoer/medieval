@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Defenses View)</h1>
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
	@if($place->def >=1 && $place->def <=49)
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->def }})</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(64,224,224)" />
		</a>
    @elseif($place->def >=50 && $place->def <=199)
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->def }}, earthwork)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(64,224,224)" />
		</a>
    @elseif($place->def >=200 && $place->def <=599)
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->def }}, pallisade)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="7" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(192,92,0)" />
		</a>
    @elseif($place->def >=600 && $place->def <=899)
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->def }}, stone wall)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="8" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(128,128,128)" />
		</a>
    @elseif($place->def >=900 && $place->def <=989)
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->def }}, stone wall)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="8" stroke="rgb(64,32,0)" stroke-width="2" fill="rgb(192,192,192)" />
		</a>
    @elseif($place->def >=990)
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->def }}, stone wall)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="8" stroke="rgb(255,32,255)" stroke-width="2" fill="rgb(255,255,255)" />
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