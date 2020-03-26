@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<h1>Create Dynasty</h1>
	<div class="row">
		<div class="col-12 d-flex justify-content-center py-3">	
	

<div class="createform">
<form method="POST" action="/dynasty" class="pb-3">

<!--crest-->
<div class="armorial">
<h3>Crest: </h3> 
<div class="crest">
@if($shape =="round")
<!--crest back-->
<div class="crestup">
<img src="{{ asset('img/crests/crest_emblems/'.$emblem.'.png') }}" width="100" height="100" alt="crest" class="crestemblemround">
</div>
<!--cest emblem-->
<div class="crestlow">
<img src="{{ asset('img/crests/crest_backs/'.$color.'.png') }}" width="100" height="100" alt="crest" class="crestbackround">
</div>
@else
<!--crest back-->
<div class="crestup">
<img src="{{ asset('img/crests/crest_emblems/'.$emblem.'.png') }}" width="100" height="100" alt="crest" class="crestemblem">
</div>
<!--cest emblem-->
<div class="crestlow">
<img src="{{ asset('img/crests/crest_backs/'.$color.'.png') }}" width="100" height="100" alt="crest" class="crestback">
</div>	
@endif
</div>

<!--emblem-->
<div class="input-group py-1">
<div class="text-center">
<a href="/dynasty/create?color={{$prevcolor}}&emblem={{$lastemblem}}&shape={{$shape}}">&#8592;</a> Color <a href="/dynasty/create?color={{$nextcolor}}&emblem={{$firstemblem}}&shape={{$shape}}">&#8594;</a>
<input type="hidden" name="crest_back" value="{{old('crest_back') ?? $color}}">
</div>
</div>
<div>{{$errors->first('crest_emblem')}}</div>
<!--back-->
<div class="input-group  py-1">
<div class="text-center">
<a href="/dynasty/create?color={{$color}}&emblem={{$nextemblem}}&shape={{$shape}}">&#8592;</a> Emblem <a href="/dynasty/create?color={{$color}}&emblem={{$prevemblem}}&shape={{$shape}}">&#8594;</a>
<input type="hidden" name="crest_emblem" value="{{old('crest_emblem') ?? $emblem}}">
</div>
</div>
<div>{{$errors->first('crest_back')}}</div>
<!--shape-->
<div class="input-group  py-1">
<div class="text-center">
<a href="/dynasty/create?color={{$color}}&emblem={{$emblem}}&shape=shield">Shield</a> Shape <a href="/dynasty/create?color={{$color}}&emblem={{$emblem}}&shape=round">Round</a>
<input type="hidden" name="crest_shape" value="{{old('crest_shape') ?? $shape}}">
</div>
</div>
<div>{{$errors->first('crest_shape')}}</div>


</div>

<!--naam-->
<div class="general">
<h3>Dynasty name:</h3>
<div class="input-group">
<input type="text" name="dynasty_name" value="{{old('dynasty_name') ?? $dynasty->dynasty_name}}">
</div>
<div>{{$errors->first('dynasty_name')}}</div>
</div>

<!--type-->
<div class="general">
<h3>Culture:</h3>
<div class="input-group">
<select name="culture">
<optgroup label="culture">
@foreach($culture as $dynasty_culture) 
    <option value="{{ $dynasty_culture->culture_id }}" {{ $dynasty_culture->culture_id ==$dynasty->culture ? 'selected' : '' }}>{{ $dynasty_culture->culture_name }}</option>
@endforeach
</select>
</div>
<div>{{$errors->first('culture')}}</div>
</div>

<!--description-->
<div class="description">
<h3>Description</h3>
<div class="input-group">
<textarea id="dynasty_description" name="dynasty_description" rows="4" cols="50">{{ old('dynasty_description')  ?? $dynasty->dynasty_description }}</textarea>
</div>
<div>{{$errors->first('dynasty_description')}}</div>
</div>



<input type="submit" value="create dynasty" class="btn btn-primary">
@csrf
</form>
</div>

</div>
</div>

@endsection