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
					<h1>Main</h1>
@foreach($placedata as $place)
	<div><a href="place/{{ $place->place_id }}">{{ $place->place_name }}</a></div>
@endforeach
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection