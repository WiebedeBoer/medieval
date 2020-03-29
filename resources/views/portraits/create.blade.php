@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<h1>Create Character</h1>
	<div class="row">
		<div class="col-12 d-flex justify-content-center py-3">	
	

<div class="createform">
<form method="POST" action="/portraits" class="pb-3">

<!--portrait-->
<div class="armorial">
<h3>Portrait: </h3> 
<div class="portrait">
@if($gender =="male")
<div class="py-1">
<img src="{{ asset('img/portraits/males/'.$portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
</div>
@else
<div class="py-1">
<img src="{{ asset('img/portraits/females/'.$portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
</div>	
@endif
</div>

<!--hair color-->
<div class="input-group py-1">
<div class="text-center">
<a href="/portraits/create?haircolor={{$prevcolor}}&portrait={{$lastportrait}}&gender={{$gender}}">&#8592;</a> Hair <a href="/portraits/create?color={{$nextcolor}}&portrait={{$firstportrait}}&gender={{$gender}}">&#8594;</a>
</div>
</div>
<div>{{$errors->first('color')}}</div>
<!--portrait-->
<div class="input-group  py-1">
<div class="text-center">
<a href="/portraits/create?haircolor={{$color}}&portrait={{$nextportrait}}&gender={{$gender}}">&#8592;</a> Portrait <a href="/portraits/create?color={{$color}}&portrait={{$prevportrait}}&gender={{$gender}}">&#8594;</a>
<input type="hidden" name="portrait" value="{{old('portrait') ?? $portrait}}">
</div>
</div>
<div>{{$errors->first('portrait')}}</div>
<!--gender-->
<div class="input-group  py-1">
<div class="text-center">
<a href="/portraits/create?color={{$color}}&portrait={{$portrait}}&gender=male">Male</a> Sex <a href="/portraits/create?color={{$color}}&portrait={{$portrait}}&gender=female">Female</a>
<input type="hidden" name="gender" value="{{old('gender') ?? $gender}}">
</div>
</div>
<div>{{$errors->first('gender')}}</div>


</div>

<!--naam-->
<div class="general">
<h3>Person name:</h3>
<div class="input-group">
<input type="text" name="person_name" value="{{old('person_name')}}">
</div>
<div>{{$errors->first('person_name')}}</div>
</div>


<input type="submit" value="create person" class="btn btn-primary">
@csrf
</form>
</div>

</div>
</div>

@endsection