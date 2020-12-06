@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<h1>Elections</h1>
@if($dynasty_owner_count >=1 && election_count >=1)

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $elections->links() }}
	</div>
</div>
</div>

<div class="container-fluid justify-content-center">
	<div class="py-5">	
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
@foreach($elections as $election)
    <tr>
	    <td class="plname"><a href="/succesion/{{ $election->title }}">{{ $election->titles->title_name }}</a></td>
        <td class="pl">{{ $election->titles->title_category }}</td>
	    <td class="pl">{{ $election->voters->person_name }}</td>
        <td class="pl">{{ $election->candidates->person_name }}</td>         
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

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $elections->links() }}
	</div>
</div>
</div>
@endif
@endsection