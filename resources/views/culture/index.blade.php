@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Cultural View)</h1>
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
	<a xlink:href="/culture/{{ $region->culture }}"><title>{{ $region->cultures->culture_name }}</title>
	@if($region->cultures->warrior_culture =="Scandinavian")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,255,0)" stroke-width="2" fill="rgb(0,128,255)" />
	@elseif($region->cultures->warrior_culture =="German")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,255,0)" stroke-width="2" fill="rgb(0,0,0)" />
	@elseif($region->cultures->warrior_culture =="Italian")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,255,0)" stroke-width="2" fill="rgb(255,255,255)" />	
	@elseif($region->cultures->warrior_culture =="Frankish")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(0,128,255)" stroke-width="2" fill="rgb(255,255,0)" />
	@elseif($region->cultures->warrior_culture =="Anglo-Saxon")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(255,255,255)" />	
	@elseif($region->cultures->warrior_culture =="Celtic")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,255,255)" stroke-width="2" fill="rgb(0,255,0)" />
	@elseif($region->cultures->warrior_culture =="Spanish")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(255,255,0)" />	
	@elseif($region->cultures->warrior_culture =="Polish")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,255,255)" stroke-width="2" fill="rgb(255,0,0)" />
	@elseif($region->cultures->warrior_culture =="Hungarian")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(0,255,0)" />	
	@elseif($region->cultures->warrior_culture =="Croatian")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(0,255,255)" />
	@elseif($region->cultures->warrior_culture =="Balkan")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(0,0,128)" />	
	@elseif($region->cultures->warrior_culture =="Kievan Rus")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(0,128,255)" stroke-width="2" fill="rgb(0,0,0)" />
	@elseif($region->cultures->warrior_culture =="Byzantine")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,255,0)" stroke-width="2" fill="rgb(255,0,0)" />					
	@elseif($region->cultures->warrior_culture =="Arabic")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(0,64,0)" />
	@elseif($region->cultures->warrior_culture =="Turkish")
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(64,0,0)" />		
	@else
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(0,0,0)" />
	@endif
	</a>
	</g>
@endforeach

</svg>
</div>




@endsection