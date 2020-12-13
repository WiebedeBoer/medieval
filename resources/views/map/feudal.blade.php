@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Feudal Ranks View)</h1>
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
	@if($place->feudal =="knight")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->feudal }})</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(64,0,0)" />
		</a>
	@elseif($place->feudal =="lord")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->feudal }})</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(192,0,0)" />
		</a>
    @elseif($place->feudal =="baron")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->feudal }})</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="6" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(192,0,0)" />
		</a>
    @elseif($place->feudal =="burgrave")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->feudal }})</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="7" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(192,92,0)" />
		</a>
    @elseif($place->feudal =="count")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->feudal }})</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="7" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(192,92,0)" />
		</a>
    @elseif($place->feudal =="margrave")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->feudal }})</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="7" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(192,92,0)" />
		</a>
    @elseif($place->feudal =="duke")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->feudal }})</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="8" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(224,224,0)" />
		</a>
    @elseif($place->feudal =="prince")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->feudal }})</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="8" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(0,224,224)" />
		</a>
    @elseif($place->feudal =="grand_duke")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, (grand duke)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="8" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(0,224,224)" />
		</a>
    @elseif($place->feudal =="king")
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->feudal }})</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="8" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(224,0,224)" />
		</a>
	@else
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->feudal }})</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(255,255,255)" />
		</a>
	@endif
	</g>		
@endforeach
</svg>
</div>
@endsection