@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Trade &amp; Industry View)</h1>
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
	@if($place->factory =="mint")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (mint)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(128,0,0)" stroke-width="2" fill="rgb(255,215,0)" />
		</a>
	@elseif($place->factory =="fur")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (furrier)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(64,32,0)" stroke-width="2" fill="rgb(128,64,0)" />
		</a>
	@elseif($place->factory =="glasswork")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (glassworks)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(255,32,255)" stroke-width="2" fill="rgb(68,155,236)" />
		</a>
	@elseif($place->factory =="ivory")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (ivory)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(192,32,0)" stroke-width="2" fill="rgb(255,255,240)" />
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