@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<div class="container">
	<h1>{{ $dynastydata->dynasty_name }} Dynasty</h1>

	@if($user->id ==$dynastydata->dynasty_owner)
		<div class="py-3"><a href="/dynasty/{{$dynastydata->dynasty_owner}}/edit" class="btn btn-primary">Edit</a></div>
	@endif
	
	<div class="py-3"><h3>Culture:</h3>{{ $dynastydata->cultures->culture_name }}</div>
	
	<div class="py-3"><h3>Description:</h3>{{ $dynastydata->dynasty_description }}</div>
</div>	
	


@endsection