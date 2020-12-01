@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Gold &amp; Silver)</h1>
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
	@if($region->gold_count >=1 && $region->silver_count >=1)
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{ $region->gold_count }} gold and {{ $region->silver_count }} silver)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="{{5 + $region->gold_count + $region->silver_count }}" stroke="rgb(128,0,0)" stroke-width="3" fill="rgb(231,198,151)" />
		</a>
	@elseif($region->gold_count >=1 && $region->silver_count ==0)
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{ $region->gold_count }} gold)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="{{5 + $region->gold_count + $region->silver_count }}" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(255,215,0)" />
		</a>
	@elseif($region->gold_count ==0 && $region->silver_count >=1)
		<a xlink:href="/region/{{ $region->region_id }}"><title>{{ $region->region_name }}, ({{ $region->silver_count }} silver)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="{{5 + $region->gold_count + $region->silver_count }}" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(192,192,192)" />
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