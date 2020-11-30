@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

@if($fleet_count >=1)
<div class="container">					
	<h1>Fleets List</h1>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $fleets->links() }}
	</div>
</div>
</div>
<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg">Fleet</th>
        <th class="lg">Master</th>
        <th class="lg" colspan="2">Owner</th>
        <th class="lg">Location</th>
	</tr>
	</thead>
	<tbody>	
    @foreach($fleets as $fleet)
    <tr>
        <td class="pl"><a href="/fleets/{{ $fleet->fleet_id }}">{{ $fleet->fleet_name }}</a></td>
        @if($fleet->master <=2))
            <td class="pl">&nbsp;</td>
        @else
            <td class="pl"><a href="/persons/{{ $fleet->master }}">{{ $fleet->masters->person_name }}</a></td>
        @endif	   
        @if($fleet->owner <=2)
            <td class="pl">&nbsp;</td>
            <td class="pl"><a href="/dynasty/{{ $fleet->dynasty }}">{{ $fleet->owners->dynasty_name }}</a></td>   
        @else
            <td class="pl"><a href="/persons/{{ $fleet->owner }}">{{ $fleet->owners->person_name }}</a></td>
            <td class="pl"><a href="/dynasty/{{ $fleet->dynasty }}">{{ $fleet->owners->dynasty_name }}</a></td>   
        @endif         
        <td class="pl"><a href="/place/{{ $fleet->place }}">{{ $fleet->places->place_name }}</a></td>	      
	</tr>
    @endforeach
</tbody>
<thead>
	<tr>
        <th class="lg">Fleet</th>
        <th class="lg">Master</th>
        <th class="lg" colspan="2">Owner</th>
        <th class="lg">Location</th>
	</tr>
	</thead>
</table>
    </div>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $fleets->links() }}
	</div>
</div>
</div>
@else
<div class="container">					
	<h1>Fleets List</h1>
    <p>No fleets</p>
</div>
@endif

@endsection