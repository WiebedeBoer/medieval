@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<h1>Charts &amp; Lists</h1>
@include('chronicles.chartmenu')


<div class="container-fluid justify-content-center">
	<div class="py-5">  

<h2>Top 50 Places by Defense</h2>

<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg width="2000" height="{{50 * 50}}" viewBox="0 0 2000 {{50 * 51}}" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map" style="width:100%;height:auto;" zoomAndPan="magnify">

@foreach($placedata as $place)
    @if($place->mod ==1)
    <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}</title>
    <g z-index="4"><text x="0" y="{{ $place->place_y + 25}}" fill="rgb(32,32,32)">{{ $place->inc }}</text></g>
    <g z-index="4"><text x="30" y="{{ $place->place_y + 25}}" fill="rgb(32,32,32)">{{ $place->place_name}}</text></g>
    <g z-index="4"><text x="160" y="{{ $place->place_y + 25}}" fill="rgb(32,32,32)">{{ $place->def }}</text></g>
    <g z-index="3"><rect width="{{50 + $place->place_w}}" height="40" x="200" y="{{$place->place_y}}" style="fill:rgb(160,160,160);stroke-width:3;stroke:rgb(0,0,0)" /></g>  
    </a>
    @else
    <a xlink:href="/place/{{ $place->place_id }}"><title>{{ $place->place_name }}</title>
    <g z-index="4"><text x="0" y="{{ $place->place_y + 25}}" fill="black">{{ $place->inc }}</text></g>
    <g z-index="4"><text x="30" y="{{ $place->place_y + 25}}" fill="black">{{ $place->place_name }}</text></g>
    <g z-index="4"><text x="160" y="{{ $place->place_y + 25}}" fill="black">{{ $place->def }}</text></g>
    <g z-index="3"><rect width="{{50 + $place->place_w}}" height="40" x="200" y="{{$place->place_y}}" style="fill:rgb(128,128,128);stroke-width:3;stroke:rgb(0,0,0)" /></g>  
    </a>
    @endif
@endforeach
</svg> 

</div>
</div>

@endsection