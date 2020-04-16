@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<!--person portrait-->
<div class="portrait">
@if($persondata->gender ==1)
	<div class="py-1">
		<img src="{{ asset('img/portraits/males/'.$persondata->portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
	</div>
@else
	<div class="py-1">
		<img src="{{ asset('img/portraits/females/'.$persondata->portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
	</div>	
@endif
</div>
<!--person full name-->
<div class="personname">
@if($persondata->gender ==0 && $persondata->spouse !=0)
	Name: {{$persondata->person_name}} <a href="/dynasty/{{$persondata->dynasty}}">{{$persondata->dynasties->dynasty_name}}</a> - <a href="/dynasty/{{$maiden_id}}">{{$maiden_name}}</a>
@else
	Name: {{$persondata->person_name}} <a href="/dynasty/{{$persondata->dynasty}}">{{$persondata->dynasties->dynasty_name}}</a>	
@endif
</div>
<!--person culture-->
<div class="culture">
</div>
<!--person religion-->
<div class="religion">
</div>
<!--person place-->
<div class="place">
</div>
<!--person home-->
<div class="house">
</div>

<!--father-->
<div class="father">
@if($persondata->father !=0)
	Father: <a href="/persons/{{$persondata->father}}">{{$persondata->fathers->person_name}}</a> <a href="/dynasty/{{$persondata->dynasty}}">{{$persondata->dynasties->dynasty_name}}</a>
	<img src="{{ asset('img/portraits/males/'.$persondata->fathers->portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
@endif
</div>
<!--mother-->
<div class="mother">
@if($persondata->mother !=0)
	@if($mothermaidendata->father !=0)
		Mother: <a href="/persons/{{$persondata->mother}}">{{$persondata->mothers->person_name}}</a> <a href="/dynasty/{{$persondata->dynasty}}">{{$persondata->dynasties->dynasty_name}}</a> - <a href="/dynasty/{{$mother_maiden_id}}">{{$mother_maiden_name}}
	@else
		Mother: <a href="/persons/{{$persondata->mother}}">{{$persondata->mothers->person_name}}</a> <a href="/dynasty/{{$persondata->dynasty}}">{{$persondata->dynasties->dynasty_name}}</a>
	@endif
	<img src="{{ asset('img/portraits/females/'.$persondata->mothers->portrait.'.png') }}" width="50" height="50" alt="portrait" class="portrait">
@endif
</div>
<!--children-->
<div class="kids">
</div>
<!--siblings-->
<div class="siblings">
</div>
<!--liege-->
<div class="liege">
</div>
<!--vassals-->
<div class="vassals">
</div>

@endsection