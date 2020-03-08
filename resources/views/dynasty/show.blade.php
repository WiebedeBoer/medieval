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

	<div>{{ $dynastydata->dynasty_name }}</div>
	
	<div>{{ $dynastydata->dynasty_description }}</div>
	
	<div>{{ $dynastydata->cultures->culture_name }}</div>

					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection