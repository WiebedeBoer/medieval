@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Silk &amp; Flax)</h1>
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
	@if($region->silk_count ==0 && $region->flax_count >=1)
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{ $region->flax_count }} flax)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="{{ 5 + $region->flax_count }}" stroke="rgb(128,0,0)" stroke-width="3" fill="rgb(64,32,0)" />
        </a>
    @elseif($region->silk_count >=1 && $region->flax_count ==0)
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{ $region->silk_count }} silk)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="{{ 5 + $region->silk_count }}" stroke="rgb(128,0,0)" stroke-width="3" fill="rgb(128,64,128)" />
        </a>
    @elseif($region->silk_count >=1 && $region->flax_count >=1)
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, (  {{ $region->silk_count }} silk, {{ $region->flax_count }} flax)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="{{ 5 + $region->flax_count + $region->silk_count }}" stroke="rgb(255,0,255)" stroke-width="4" fill="rgb(128,128,128)" />
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