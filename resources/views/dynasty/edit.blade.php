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
            </div>
        </div>
    </div>
</div>
@endsection