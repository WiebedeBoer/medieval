@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Climate View)</h1>
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
	<a xlink:href="/region/{{ $region->region_id }}">
	@if($region->climate =="temperate_woodlands_marshes")
        <title>{{ $region->region_name }} (temperate woodland and marshland)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(213,232,212)" />
    @elseif($region->climate =="temperate_woodlands")
        <title>{{ $region->region_name }} (temperate woodland)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(213,232,212)" />
    @elseif($region->climate =="temperate_grasslands_marshes")
        <title>{{ $region->region_name }} (temperate grassland and marshland)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(164,213,138)" />
    @elseif($region->climate =="temperate_grasslands")
        <title>{{ $region->region_name }} (temperate grassland)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(164,213,138)" />
    @elseif($region->climate =="mediterranean_shrublands_marshes")
        <title>{{ $region->region_name }} (mediterranean shrubland and marshland)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(255,204,153)" />
    @elseif($region->climate =="mediterranean_shrublands")
        <title>{{ $region->region_name }} (mediterranean shrubland)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(255,204,153)" />
    @elseif($region->climate =="mediterranean_woodlands_marshes")
        <title>{{ $region->region_name }} (mediterranean woodland and marshland)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(205,235,139)" />
    @elseif($region->climate =="mediterranean_woodlands")
        <title>{{ $region->region_name }} (mediterranean woodland)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(205,235,139)" />
    @elseif($region->climate =="steppe")
        <title>{{ $region->region_name }} (steppe)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(160,82,45)" />
    @elseif($region->climate =="desert")
        <title>{{ $region->region_name }} (desert oasis)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(255,255,136)" />
    @elseif($region->climate =="desert_marshes")
        <title>{{ $region->region_name }} (desert marshland)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(255,255,136)" />
	@else
        <title>{{ $region->region_name }}</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(0,0,0)" />
	@endif
	</a>
	</g>
@endforeach

</svg>
</div>


@endsection