@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Armories View)</h1>

@include('region.mapmenu')
<div class="wmin">
<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg width="3000" height="2516" viewBox="0 0 3000 2516" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map" class="worldmap" zoomAndPan="magnify">
<g z-index="1">
<image xlink:href="{{ asset('img/maps/good.png') }}" x="0" y="0" width="auto" height="auto">
</g>
@foreach($regiondata as $region)
	<g z-index="2">
    @if($region->armor >=1 && $region->plate ==0 && $region->weapon ==0)
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{$region->armor}} armoury)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="{{5 + $region->armor}}" stroke="rgb(64,0,0)" stroke-width="{{1 + $region->armor}}" fill="rgb(29,39,57)" />
		</a>
	@elseif($region->armor ==0 && $region->plate >=1 && $region->weapon ==0)
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{$region->plate}} plate armoury)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="{{5 + $region->plate}}" stroke="rgb(64,0,0)" stroke-width="{{1 + $region->plate}}" fill="rgb(202,204,206)" />
		</a>
	@elseif($region->armor ==0 && $region->plate ==0 && $region->weapon >=1)
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{$region->weapon}} smithy)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="{{5 + $region->weapon}}" stroke="rgb(64,0,0)" stroke-width="{{1 + $region->weapon}}" fill="rgb(123,144,149)" />
		</a>
	@elseif($region->armor ==0 && $region->plate >=1 && $region->weapon >=1)
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{$region->plate}} plate armoury, {{$region->weapon}} smithy)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="{{5 + $region->plate + $region->weapon}}" stroke="rgb(192,0,0)" stroke-width="{{1 + $region->plate + $region->weapon}}" fill="rgb(202,204,206)" />
		</a>
	@elseif($region->armor >=1 && $region->plate ==0 && $region->weapon >=1)
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{$region->armor}} armoury, {{$region->weapon}} smithy)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="{{5 + $region->armor + $region->weapon}}" stroke="rgb(192,0,0)" stroke-width="{{1 + $region->armor + $region->weapon}}" fill="rgb(29,39,57)" />
		</a>
	@else
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="5" stroke="rgb(0,0,0)" stroke-width="1" fill="rgb(0,0,0)" />
		</a>
	@endif
	</g>		
@endforeach

</svg>
</div>

@endsection