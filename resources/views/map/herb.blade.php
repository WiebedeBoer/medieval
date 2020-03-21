@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Herbs &amp; Fragrances View)</h1>
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
	@if($region->herb =="cedar")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{ $region->herb }})</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(98,108,59)" />
		</a>
	@elseif($region->herb =="elder")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{ $region->herb }})</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,255,0)" stroke-width="2" fill="rgb(156,132,143)" />
		</a>
	@elseif($region->herb =="frankincense")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{ $region->herb }})</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(171,150,119)" />
		</a>
	@elseif($region->herb =="heather")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{ $region->herb }})</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,255,0)" stroke-width="2" fill="rgb(198,105,149)" />
		</a>
	@elseif($region->herb =="hops")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{ $region->herb }})</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,255,0)" stroke-width="2" fill="rgb(117,138,90)" />
		</a>
	@elseif($region->herb =="lavender")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{ $region->herb }})</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(251,174,210)" />
		</a>
	@elseif($region->herb =="rosemary")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{ $region->herb }})</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,255)" stroke-width="2" fill="rgb(101,116,97)" />
		</a>
	@else
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(0,0,0)" />
		</a>
	@endif
	</g>
@endforeach

</svg>
</div>


@endsection