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


<!--portrait-->
<div class="input-group py-1">
<div class="text-center">
<a href="/portraits/create?portrait={{$nextportrait}}&gender={{$gender}}">&#8592;</a> Portrait <a href="/portraits/create?portrait={{$prevportrait}}&gender={{$gender}}">&#8594;</a>
<input type="hidden" name="portrait" value="{{old('portrait') ?? $portrait}}">
</div>
</div>
<div>{{$errors->first('portrait')}}</div>
<!--gender-->
<div class="input-group  py-1">
<div class="text-center">
<a href="/portraits/create?portrait={{$firstmaleportrait}}&gender=male">Male</a> or <a href="/portraits/create?portrait={{$firstfemaleportrait}}&gender=female">Female</a>
<input type="hidden" name="gender" value="{{old('gender') ?? $gender}}">
</div>
</div>
<div>{{$errors->first('gender')}}</div>


</div>

<!--naam-->
<div class="general">
<h3>Name:</h3>
<div class="input-group">
<select name="person_name">
<optgroup label="name">
@foreach($names as $pcname) 
    <option value="{{ $pcname->person_name }}">{{ $pcname->person_name }}</option>
@endforeach
</select>
</div>
<div>{{$errors->first('person_name')}}</div>
</div>


<!--stats-->
<div class="py-3">
<h2>Statistics</h2>

<h3>Judgement:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="jud">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('jud')}}</div>

<h3>Engineering:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="eng">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('eng')}}</div>

<h3>Commerce:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="com">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('com')}}</div>

<h3>Agriculture:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="agr">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('agr')}}</div>

<h3>Tactics:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="tac">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('tac')}}</div>

<h3>Leadership:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="lea">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('lea')}}</div>

<h3>Charima:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="cha">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('cha')}}</div>

<h3>Brawn:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="bra">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('bra')}}</div>

<h3>Strength:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="str">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('str')}}</div>

<h3>Agility:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="agi">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('agi')}}</div>

<h3>Polearms:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="pol">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('pol')}}</div>

<h3>Swordsmanship:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="swo">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('swo')}}</div>

<h3>Archery:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="arc">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('arc')}}</div>

<h3>Riding:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="rid">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('rid')}}</div>

<h3>Sailing:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="sai">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('sai')}}</div>

<h3>Raiding:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="rai">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('rai')}}</div>

<h3>Tracking:</h3>
<div class="input-group py-1">
<div class="text-center">
<select name="tra">
    <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>
</div>
</div>
<div>{{$errors->first('tra')}}</div>

</div>


<div class="py-1"><input type="submit" value="create person" class="btn btn-primary"></div>
@csrf
</form>
</div>

</div>
</div>

@endsection