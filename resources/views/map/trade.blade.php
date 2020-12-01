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
	@if($place->factory =="cooper")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (cooper)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(128,0,0)" stroke-width="2" fill="rgb(192,92,0)" />
		</a>
    @elseif($place->factory =="granary")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (granary)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(128,0,0)" stroke-width="2" fill="rgb(245,222,179)" />
		</a>
	@elseif($place->factory =="watermill")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (watermill)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(0,0,128)" stroke-width="2" fill="rgb(128,255,255)" />
		</a>
    @elseif($place->factory =="windmill")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (windmill)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(128,0,128)" stroke-width="2" fill="rgb(255,255,255)" />
		</a>
	@elseif($place->factory =="mint")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (mint)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(128,0,0)" stroke-width="2" fill="rgb(255,215,0)" />
		</a>
	@elseif($place->factory =="potterer")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (potterer)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(128,0,0)" stroke-width="2" fill="rgb(156,86,66)" />
		</a>
	@elseif($place->factory =="fur")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (furrier)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(64,32,0)" stroke-width="2" fill="rgb(128,64,0)" />
		</a>
	@elseif($place->factory =="leather")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (tannery)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(0,32,128)" stroke-width="2" fill="rgb(68,55,36)" />
		</a>
	@elseif($place->factory =="glasswork")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (glassworks)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(255,32,255)" stroke-width="2" fill="rgb(68,155,236)" />
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