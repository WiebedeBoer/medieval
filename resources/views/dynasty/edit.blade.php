@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<h1>{{ $dynastydata->dynasty_name }} Dynasty</h1>
	<div class="row">
		<div class="container">	
	

	<div class="py-3"><h3>Dynasty:</h3> {{ $dynastydata->dynasty_name }}</div>
	
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
	
	
<div class="py-3">

<div class="editform">
<form method="POST" action="/dynasty/{{ $dynastydata->dynasty_id }}" class="pb-3">
@method('PATCH')

<!--description-->
<div class="dscription">
<h3>Description:</h3>
<div class="input-group">
<textarea id="dynasty_description" name="dynasty_description" class="form-control rounded-0" rows="10">{{ old('dynasty_description')  ?? $dynastydata->dynasty_description }}</textarea>
</div>
<div>{{$errors->first('dynasty_description')}}</div>
</div>

<div class="py-1"><input type="submit" value="edit dynasty" class="btn btn-primary"></div>
@csrf
</form>

</div>
</div>

</div>
</div>

@endsection