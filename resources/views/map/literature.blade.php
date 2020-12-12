@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (Literature Cycle View)</h1>
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
	@if($region->cycle =="ottonian")
		<title>{{ $region->region_name }} (German)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(247,198,29)" />
	@elseif($region->cycle =="britain")
		<title>{{ $region->region_name }} (Briton)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(128,0,0)" stroke-width="2" fill="rgb(200,16,46)" />
	@elseif($region->cycle =="carolingian")
		<title>{{ $region->region_name }} (Frankish)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(0,0,124)" />
	@elseif($region->cycle =="occitan")
		<title>{{ $region->region_name }} (Occitan)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(128,0,0)" stroke-width="2" fill="rgb(247,216,0)" />
	@elseif($region->cycle =="norse")
		<title>{{ $region->region_name }} (Norse)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(232,42,44)" stroke-width="2" fill="rgb(0,39,101)" />
	@elseif($region->cycle =="celtic")
		<title>{{ $region->region_name }} (Celtic)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(128,0,0)" stroke-width="2" fill="rgb(13,102,71)" />
	@elseif($region->cycle =="navarrese")
		<title>{{ $region->region_name }} (Navarre)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(200,16,37)" />
	@elseif($region->cycle =="aragonese")
		<title>{{ $region->region_name }} (Aragon)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(247,247,0)" />
	@elseif($region->cycle =="catalan")
		<title>{{ $region->region_name }} (Catalan)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(247,0,0)" />
	@elseif($region->cycle =="castilian")
		<title>{{ $region->region_name }} (Castillian)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(247,247,0)" stroke-width="2" fill="rgb(247,0,0)" />
	@elseif($region->cycle =="asturian")
		<title>{{ $region->region_name }} (Asturian)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(238,205,22)" stroke-width="2" fill="rgb(0,99,247)" />
	@elseif($region->cycle =="galician")
		<title>{{ $region->region_name }} (Galician)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(0,148,198)" stroke-width="2" fill="rgb(247,247,247)" />
	@elseif($region->cycle =="lombard")
		<title>{{ $region->region_name }} (Lombard)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(192,12,46)" stroke-width="2" fill="rgb(0,98,47)" />
	@elseif($region->cycle =="friulian")
		<title>{{ $region->region_name }} (Friulian)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(232,205,35)" stroke-width="2" fill="rgb(0,148,247)" />
	@elseif($region->cycle =="ligurian")
		<title>{{ $region->region_name }} (Ligurian)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(184,21,33)" stroke-width="2" fill="rgb(247,247,247)" />
	@elseif($region->cycle =="neapolitan")
		<title>{{ $region->region_name }} (Napolitan)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(247,208,0)" stroke-width="2" fill="rgb(0,0,148)" />
	@elseif($region->cycle =="sicilian")
		<title>{{ $region->region_name }} (Sicilian)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(247,0,0)" stroke-width="2" fill="rgb(247,232,0)" />
	@elseif($region->cycle =="arabic")
		<title>{{ $region->region_name }} (Arabian)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(200,16,37)" stroke-width="2" fill="rgb(0,118,59)" />
	@elseif($region->cycle =="croatian")
		<title>{{ $region->region_name }} (Croatian)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(214,0,0)" stroke-width="2" fill="rgb(247,247,247)" />
	@elseif($region->cycle =="hungarian")
		<title>{{ $region->region_name }} (Hungarian)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(199,41,60)" stroke-width="2" fill="rgb(65,108,75)" />
	@elseif($region->cycle =="polish")
		<title>{{ $region->region_name }} (Polish)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(247,0,0)" stroke-width="2" fill="rgb(247,247,247)" />
	@elseif($region->cycle =="serbian")
		<title>{{ $region->region_name }} (Serbian)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(142,43,50)" stroke-width="2" fill="rgb(231,217,197)" />
	@elseif($region->cycle =="russian")
		<title>{{ $region->region_name }} (Kievan Rus)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(246,206,0)" stroke-width="2" fill="rgb(1,88,181)" />
	@elseif($region->cycle =="byzantine")
		<title>{{ $region->region_name }} (Byzantine)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(240,190,31)" stroke-width="2" fill="rgb(83,0,123)" />
	@elseif($region->cycle =="kannada")
		<title>{{ $region->region_name }} (Georgian)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(185,0,0)" stroke-width="2" fill="rgb(247,247,247)" />
	@elseif($region->cycle =="armenian")
		<title>{{ $region->region_name }} (Armenian)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(145,0,23)" stroke-width="2" fill="rgb(229,185,102)" />
	@elseif($region->cycle =="persian")
		<title>{{ $region->region_name }} (Persian)</title>
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(64,0,0)" stroke-width="2" fill="rgb(0,199,247)" />
	@else
		<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="5" stroke="rgb(0,0,0)" stroke-width="2" fill="rgb(0,0,0)" />
	@endif
	</a>
	</g>
@endforeach

</svg>
</div>


@endsection