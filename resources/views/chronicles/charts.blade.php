@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<h1>Charts &amp; Lists</h1>
@include('chronicles.chartmenu')


<div class="container-fluid justify-content-center">
	<div class="py-5">  

<h2>Realm Rankings by Territory</h2>

<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg width="2000" height="{{$realm_count * 50}}" viewBox="0 0 2000 {{$realm_count * 51}}" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="map" style="width:100%;height:auto;" zoomAndPan="magnify">

@foreach($realmdata as $realm)
    @if($realm->mod ==1)
    <a xlink:href="/realms/{{ $realm->realm_id }}"><title>{{ $realm->realm_name }}</title>
    <g z-index="4"><text x="0" y="{{ $realm->realm_y + 25}}" fill="rgb(32,32,32)">{{ $realm->inc }}</text></g>
    <g z-index="4"><text x="30" y="{{ $realm->realm_y + 25}}" fill="rgb(32,32,32)">{{ $realm->realm_name }}</text></g>
    <g z-index="4"><text x="170" y="{{ $realm->realm_y + 25}}" fill="rgb(32,32,32)">{{ $realm->places_count }}</text></g>
    <g z-index="3"><rect width="{{50 + $realm->realm_w}}" height="40" x="200" y="{{$realm->realm_y}}" style="fill:rgb(160,160,160);stroke-width:3;stroke:rgb(0,0,0)" /></g>  
    </a>
    @else
    <a xlink:href="/realms/{{ $realm->realm_id }}"><title>{{ $realm->realm_name }}</title>
    <g z-index="4"><text x="0" y="{{ $realm->realm_y + 25}}" fill="black">{{ $realm->inc }}</text></g>
    <g z-index="4"><text x="30" y="{{ $realm->realm_y + 25}}" fill="black">{{ $realm->realm_name }}</text></g>
    <g z-index="4"><text x="170" y="{{ $realm->realm_y + 25}}" fill="black">{{ $realm->places_count }}</text></g>
    <g z-index="3"><rect width="{{50 + $realm->realm_w}}" height="40" x="200" y="{{$realm->realm_y}}" style="fill:rgb(128,128,128);stroke-width:3;stroke:rgb(0,0,0)" /></g>  
    </a>
    @endif
@endforeach
</svg> 

</div>
</div>

@endsection