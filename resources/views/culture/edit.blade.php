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
					<h1>{{ $culturedata->culture_name }}</h1>

<div>{{ $regions }}</div>
							
@if($regions >=1)	
	@foreach($culturedata->regions as $region) 
    <div><a href="/region/{{ $region->region_id }}">{{ $region->region_name }}</a></div>
  @endforeach
@endif
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection