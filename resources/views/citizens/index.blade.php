@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

@if($citizen_count >=1)
<div class="container">					
	<h1>Citizens List</h1>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $citizens->links() }}
	</div>
</div>
</div>

<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg">Citizen</th>
        <th class="lg">Realm</th>
        <th class="lg">Kingdom Turns</th>
	</tr>
	</thead>
	<tbody>	
    @foreach($citizens as $citizen)
    <tr>
        <td class="pl"><a href="/persons/{{ $citizen->citizen }}">{{ $citizen->citizens->person_name}}</a></td>   
        <td class="pl"><a href="/realms/{{ $citizen->realm }}">{{ $citizen->realms->realm_name }}</a></td>	
        <td class="pl">{{ $citizen->citizens->kt}}</td>      
	</tr>
    @endforeach
</tbody>
<thead>
	<tr>
        <th class="lg">Citizen</th>
        <th class="lg">Realm</th>
        <th class="lg">Kingdom Turns</th>
	</tr>
	</thead>
</table>
</div>
</div>

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $citizens->links() }}
	</div>
</div>
</div>
@else
<div class="container">					
	<h1>Citizens List</h1>
    <p>No citizens</p>
</div>
@endif

@endsection