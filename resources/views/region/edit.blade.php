@extends('layouts.manual')
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
					<h1>{{$regiondata->region_name}}</h1>

<div><a href="/culture/{{ $regiondata->cultures->culture_id }}">{{ $regiondata->cultures->culture_name }}</a></div>

<div>{{ $places }}</div>
							
@if($places >=1)	
	@foreach($regiondata->places as $place) 
    <div><a href="/place/{{ $place->place_id }}">{{ $place->place_name }}</a></div>
  @endforeach
@endif	
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection