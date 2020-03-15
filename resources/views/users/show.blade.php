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
					<h1>{{ $userdata->name }}</h1>

	<div>{{ $userdata->name }}</div>
	<div>{{ $userdata->email }}</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection