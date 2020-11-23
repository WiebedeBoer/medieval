@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<form method="POST" action="/buildings/{{ $placedata->place_id }}/edit" class="pb-3">
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