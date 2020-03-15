@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

	<h1>{{ $dynastydata->dynasty_name }} Dynasty</h1>

	<div>{{ $dynastydata->dynasty_name }}</div>
	
	<div>{{ $dynastydata->dynasty_description }}</div>
	
	<div>{{ $dynastydata->cultures->culture_name }}</div>


@endsection