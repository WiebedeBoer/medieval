@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Religion View)</h1>
@include('region.mapmenu')
<div class="wmin">
<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg width="3000" height="2516" viewBox="0 0 3000 2516" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map" class="worldmap" zoomAndPan="magnify">
<g z-index="1">
<image xlink:href="{{ asset('img/maps/good.png') }}" x="0" y="0" width="auto" height="auto">
</g>
@foreach($regionalculture as $region)
	<g z-index="2">	
	@if($region->cultures->manorial_culture ==5)
		<a xlink:href="/religion/5"><title>Muslim</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(0,0,0)" />
		</a>
	@elseif($region->cultures->manorial_culture ==4)
		<a xlink:href="/religion/4"><title>Greek Orthodox</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,255,0)" stroke-width="2" fill="rgb(255,0,255)" />
		</a>
	@elseif($region->cultures->manorial_culture ==2)
		<a xlink:href="/religion/2"><title>Serbian Orthodox</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(255,128,0)" />
		</a>
	@elseif($region->cultures->manorial_culture ==3)
		<a xlink:href="/religion/3"><title>Russian Orthodox</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(0,128,255)" />	
		</a>
	@else
		<a xlink:href="/religion/1"><title>Catholic</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(255,255,0)" />
		</a>
	@endif
	</g>
@endforeach

</svg>
</div>




@endsection