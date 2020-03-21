@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

	<h1>Dynasty</h1>
@if($ownercount ==0)
	<div class="row">
		<div class="col-12 d-flex justify-content-center py-3">	
			<div>				
				<a href="/dynasty/create">Create Dynasty</a>
			</div>
		</div>		
	</div>
@endif
	<!--dynasties-->
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
    {{ $dynastydata->links() }}
</div>
</div>	
	
	
	<div class="row">
		<div class="col-12 d-flex justify-content-center py-3">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Dynasty</th>
		<th class="lg">Culture</th>
	</tr>
	</thead>
	<tbody>			
@foreach($dynastydata as $dynasty)
	<tr>
	@if($dynasty->dynasty_owner ==$user->id)
		<td><a href="/dynasty/{{ $dynasty->dynasty_id }}/edit">{{ $dynasty->dynasty_name }}</a></td>
	@else
		<td><a href="/dynasty/{{ $dynasty->dynasty_id }}">{{ $dynasty->dynasty_name }}</a></td>
	@endif
	<td><a href="/culture/{{ $dynasty->culture }}">{{ $dynasty->cultures->culture_name }}</a></td>
	</tr>
@endforeach
		</tbody>
	<thead>
	<tr>
		<th class="lg">Dynasty</th>
		<th class="lg">Culture</th>
	</tr>
	</thead>
</table>
		</div>		
	</div>
	
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
    {{ $dynastydata->links() }}
</div>
</div>		
	
@endsection