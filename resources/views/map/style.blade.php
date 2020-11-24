@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Business &amp; Entertainment View)</h1>
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
	@if($region->style =="bazaar")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, (trade fair)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,255,0)" stroke-width="2" fill="rgb(255,192,0)" />
		</a>
	@elseif($region->style =="fair" || $region->style =="caravan")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, (trade fair)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,255,0)" stroke-width="2" fill="rgb(255,128,0)" />
		</a>		
		
	@elseif($region->style =="coaching")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, (coaching inn)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(0,128,255)" />
		</a>
	@elseif($region->style =="tavern")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, (tavern)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(92,192,255)" />
		</a>
	@elseif($region->style =="minstrel")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, (tavern with minstrel)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(0,255,255)" />
		</a>		
		

	@elseif($region->style =="falconry")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, (falconer)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,255)" stroke-width="2" fill="rgb(0,192,0)" />
		</a>
	@elseif($region->style =="hunt")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, (hunting ground)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,255)" stroke-width="2" fill="rgb(0,128,0)" />
		</a>
		
	@elseif($region->style =="joust")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, (tiltyard)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(192,64,0)" />
		</a>

	@elseif($region->style =="reliquary")
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, (pelgrimage site)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(64,0,64)" stroke-width="2" fill="rgb(255,255,0)" />
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