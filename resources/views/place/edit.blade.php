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
					<h1>{{ $placedata->place_name }}</h1>

	<div><a href="/region/{{ $placedata->regions->region_id }}">{{ $placedata->regions->region_name }}</a></div>
	<div><a href="/culture/{{ $culture->culture_id }}">{{ $culture->culture_name }}</a></div>

					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection