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
    <g z-index="3">
    <a xlink:href="/realms/{{ $realm->realm_id }}"><title>{{ $realm->realm_name }}</title>
    <rect width="{{50 + $realm->realm_w}}" height="40" x="10" y="{{$realm->realm_y}}" style="fill:rgb(160,160,160);stroke-width:3;stroke:rgb(32,32,32)" /></a>
    </g> 
    <g z-index="4">
    <a xlink:href="/realms/{{ $realm->realm_id }}"><title>{{ $realm->realm_name }}</title>
    <text x="200" y="{{ $realm->realm_y + 25}}" fill="rgb(32,32,32)">{{ $realm->places_count }}</text></a>
    </g>     
    <g z-index="5">
    <a xlink:href="/realms/{{ $realm->realm_id }}"><title>{{ $realm->realm_name }}</title>
    <text x="20" y="{{ $realm->realm_y + 25}}" fill="rgb(32,32,32)">{{ $realm->inc }}</text></a>
    </g>    
    <g z-index="5">
    <a xlink:href="/realms/{{ $realm->realm_id }}"><title>{{ $realm->realm_name }}</title>
    <text x="50" y="{{ $realm->realm_y + 25}}" fill="rgb(32,32,32)">{{ $realm->realm_name }}</text></a>
    </g>

    @else
    <g z-index="3">
    <a xlink:href="/realms/{{ $realm->realm_id }}"><title>{{ $realm->realm_name }}</title>
    <rect width="{{50 + $realm->realm_w}}" height="40" x="10" y="{{$realm->realm_y}}" style="fill:rgb(128,128,128);stroke-width:3;stroke:rgb(0,0,0)" /></a>
    </g>
    <g z-index="4">
    <a xlink:href="/realms/{{ $realm->realm_id }}"><title>{{ $realm->realm_name }}</title>
    <text x="200" y="{{ $realm->realm_y + 25}}" fill="rgb(0,0,0)">{{ $realm->places_count }}</text></a>
    </g>  
    <g z-index="5">
    <a xlink:href="/realms/{{ $realm->realm_id }}"><title>{{ $realm->realm_name }}</title>
    <text x="20" y="{{ $realm->realm_y + 25}}" fill="rgb(0,0,0)">{{ $realm->inc }}</text></a>
    </g>
    <g z-index="5">
    <a xlink:href="/realms/{{ $realm->realm_id }}"><title>{{ $realm->realm_name }}</title>
    <text x="50" y="{{ $realm->realm_y + 25}}" fill="rgb(0,0,0)">{{ $realm->realm_name }}</text></a>
    </g> 

    @endif
@endforeach
</svg> 

</div>
</div>

@endsection