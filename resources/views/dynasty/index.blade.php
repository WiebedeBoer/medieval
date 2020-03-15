@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

	<h1>Dynasty</h1>
	<div class="row">
		<div class="col-12 d-flex justify-content-center py-3">	
			<div>				
				<a href="/dynasty/create">Create Dynasty</a>
			</div>
		</div>		
	</div>
					
@foreach($dynastydata as $dynasty)
	<div><a href="dynasty/{{ $dynasty->dynasty_id }}">{{ $dynasty->dynasty_name }}</a></div>
@endforeach

@endsection