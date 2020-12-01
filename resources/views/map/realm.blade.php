@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Realm View)</h1>
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
	@if($place->realm_offset ==1)
		<a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(255,0,0)" />
		</a>
    @elseif($place->realm_offset ==2)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(255,0,255)" />
		</a>
    @elseif($place->realm_offset ==3)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(255,255,0)" />
		</a>
    @elseif($place->realm_offset ==4)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(255,128,0)" />
		</a>
    @elseif($place->realm_offset ==5)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(0,255,255)" />
		</a>
    @elseif($place->realm_offset ==6)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(128,0,0)" />
		</a>
    @elseif($place->realm_offset ==7)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(64,32,0)" />
		</a>
    @elseif($place->realm_offset ==8)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(0,64,255)" />
		</a>
    @elseif($place->realm_offset ==9)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(92,92,92)" />
		</a>
    @elseif($place->realm_offset ==10)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(224,224,224)" />
		</a>
    @elseif($place->realm_offset ==11)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(255,64,128)" />
		</a>
    @elseif($place->realm_offset ==12)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(32,32,32)" />
		</a>
    @elseif($place->realm_offset ==13)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(64,255,64)" />
		</a>
    @elseif($place->realm_offset ==14)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(0,32,128)" />
		</a>
    @elseif($place->realm_offset ==15)
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(32,92,32)" />
		</a>
	@else
        <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}, ({{ $place->realms->realm_name }} in {{ $place->regions->region_name }} region)</title>
		<circle cx="{{ $place->offset_x_coord }}" cy="{{ $place->offset_y_coord }}" r="5" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(128,0,128)" />
		</a>
	@endif
	</g>		
@endforeach
</svg>
</div>
@endsection