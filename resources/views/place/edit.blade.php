@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<div class="card-body">
	<h1>{{ $placedata->place_name }}</h1>
	<div class="m-1"><a href="/region/{{ $placedata->regions->region_id }}">{{ $placedata->regions->region_name }}</a></div>
	<div class="m-1"><a href="/culture/{{ $culture->culture_id }}">{{ $culture->culture_name }}</a></div>
	<form method="POST" action="/place/edit/{{ $placedata->place_id }}" class="pb-3">
	@method('PATCH')
	<div class="m-1">
		<p>Description:</p>
		
		<textarea id="place_description" name="place_description" style="width:100%;max-width:100%;height:200px;">
		{{ old('place_description') ?? $placedata->place_description }}
		</textarea>
		<p>Action:</p>
		<div class="input-group">
		    <select name="develop" id="develop">
                <option value="agriculture">develop agriculture</option>
                <option value="industry">develop industry</option>
                <option value="fortify">fortify</option>
				<option value="court">hold court</option>
				<option value="rally">rally</option>
				<option value="train">train</option>
				<option value="draft">draft</option>
            </select>
		</div>
		<p>Person:</p>
		<div class="input-group">
		    <select name="person" id="person">
			@foreach($persons as $person) 
				<option value="{{ $person->person_id }}">{{ $person->person_name }}</option>
   			@endforeach
            </select>
		</div>

		<p></p>
	<input type="submit" value="edit">
	</div>
	@csrf
	</form>
</div>
@endsection