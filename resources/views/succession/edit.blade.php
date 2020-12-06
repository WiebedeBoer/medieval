@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container-fluid justify-content-center">
	<div class="py-5">	
    <h1>Election</h1>
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Title</th>
        <th class="lg">Category</th>
        <th class="lg">Voter</th>
        <th class="lg">Candidate</th>
	</tr>
	</thead>
	<tbody>	
@foreach($votes as $vote)
    <tr>
	    <td class="plname">{{ $vote->titles->title_name }}</td>
        <td class="pl">{{ $vote->titles->title_category }}</td>
	    <td class="pl">{{ $vote->voters->person_name }}</td>
        <td class="pl">{{ $vote->candidates->person_name }}</td>         
	</tr>
@endforeach
</tbody>
	<thead>
	<tr>
        <th class="lg">Title</th>
        <th class="lg">Category</th>
        <th class="lg">Voter</th>
        <th class="lg">Candidate</th>
	</tr>
	</thead>
</table>
</div>
</div>

@endsection