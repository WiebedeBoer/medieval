@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<div class="container">
	<h1>{{ $dynastydata->dynasty_name }} Dynasty</h1>

	<!--edit button-->
	@if($user->id ==$dynastydata->dynasty_owner)
		<div class="py-3"><a href="/dynasty/{{$dynastydata->dynasty_id}}/edit" class="btn btn-primary">Edit</a></div>
	@endif
	
	<div class="py-3"><h3>Culture:</h3><a href="/culture/{{$dynastydata->culture}}">{{ $dynastydata->cultures->culture_name }}</a></div>
	
	

	
<!--crest-->
<div class="armorial">
<h3>Crest: </h3> 
<div class="crest">
@if($dynastydata->crest_shape =="round")
<!--crest back-->
<div class="crestup">
<img src="{{ asset('img/crests/crest_backs/'.$dynastydata->crest_back.'.png') }}" width="100" height="100" alt="crest" class="crestbackround">
</div>
<!--cest emblem-->
<div class="crestlow">
<img src="{{ asset('img/crests/crest_emblems/'.$dynastydata->crest_emblem.'.png') }}" width="100" height="100" alt="crest" class="crestemblemround">
</div>
@else
<!--crest back-->
<div class="crestup">
<img src="{{ asset('img/crests/crest_backs/'.$dynastydata->crest_back.'.png') }}" width="100" height="100" alt="crest" class="crestback">
</div>
<!--cest emblem-->
<div class="crestlow">
<img src="{{ asset('img/crests/crest_emblems/'.$dynastydata->crest_emblem.'.png') }}" width="100" height="100" alt="crest" class="crestemblem">
</div>
@endif
</div>
	
	<!--description-->
	<div class="py-3"><h3>Description:</h3>{{ $dynastydata->dynasty_description }}</div>
	
</div>	
	


@endsection