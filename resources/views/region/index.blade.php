@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Game</div>
                <div class="card-body">
					<div class="container">
					<h1>World Map</h1>

<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg width="3000" height="2516" viewBox="0 0 3000 2516" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map" class="worldmap" zoomAndPan="magnify">
<g z-index="1">
<image xlink:href="{{ asset('img/maps/good.png') }}" x="0" y="0" width="3000" height="2516">
</g>
@foreach($regiondata as $region)
	<g z-index="2">
	<a xlink:href="region/{{ $region->region_id }}"><title>{{ $region->region_name }}</title>
	<circle cx="{{ $region->region_x }}" cy="{{ $region->region_y }}" r="6" stroke="rgb(255,0,0)" stroke-width="2" fill="rgb(0,255,255)" />
	</a>
	</g>
@endforeach

</svg>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection