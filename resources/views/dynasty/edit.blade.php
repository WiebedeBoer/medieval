@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<h1>{{ $dynastydata->place_name }} Dynasty</h1>
	<div class="row">
		<div class="col-12 d-flex justify-content-center py-3">	
	

	<div>{{ $dynastydata->place_name }}</div>
	
	<div>{{ $dynastydata->cultures->culture_name }}</div>

<div class="editform">
<form method="POST" action="/dynasty/{{ $dynastydata->dynasty_id }}" class="pb-3">
@method('PATCH')

<!--description-->
<div class="dscription">
<h3>Description</h3>
<div class="input-group">
<textarea id="dynasty_description" name="dynasty_description" rows="4" cols="50">{{ old('dynasty_description')  ?? $dynasty->dynasty_description }}</textarea>
</div>
<div>{{$errors->first('dynasty_description')}}</div>
</div>

<input type="submit" value="edit dynasty" class="btn btn-primary">
@csrf
</form>
</div>

</div>
</div>

@endsection