@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
					<h1>Places List</h1>
					</div>
@include('region.mapmenu')
	
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $placedata->links() }}
	</div>
</div>
</div>
@include('place.placetable')

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $placedata->links() }}
	</div>
</div>
</div>
@endsection