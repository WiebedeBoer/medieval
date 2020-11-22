@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
	<h1>{{ $placedata->place_name }}</h1>

	<div class="d-flex justify-content-center">
	<div class="m-1"><a href="/place/{{$id}}">Show</a></div>
	</div>

	<div><a href="/region/{{ $placedata->regions->region_id }}">{{ $placedata->regions->region_name }}</a></div>
	<div><a href="/culture/{{ $culture->culture_id }}">{{ $culture->culture_name }}</a></div>

	<form method="POST" action="/buildings/create/{{ $placedata->place_id }}" class="pb-3">
		<p>Construction:</p>
		<div class="input-group">
		    <select name="cars" id="cars">
                <option value="chapel">chapel</option>
                <option value="church">church</option>
                <option value="cathedral">cathedral</option>
            </select>
		</div>
	    <input type="submit" value="create building">
	@csrf
	</form>

@endsection