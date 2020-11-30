@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

@if($farmstead_count >=1)
<div class="container">					
					<h1>Farmsteads List</h1>
					</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $farmsteads->links() }}
	</div>
</div>
</div>
<div class="container-fluid justify-content-center">
	<div class="py-5">
	<table class="table-striped tablesorter table">
	<thead>
        <tr> 
            <th class="lg">Farmstead</th>     
            <th class="lg">Master</th>
            <th class="lg" colspan="2">Owner</th>
            <th class="lg">Region</th>
        </tr>
	</thead>
	<tbody>
    @foreach($farmsteads as $farmstead)
        <tr>
        <td class="pl"><a href="/farmsteads/{{ $farmstead->farmstead_id }}">{{ $farmstead->steadnames->farmstead_name}}</a></td> 
            <td class="pl"><a href="/persons/{{ $farmstead->master }}">{{ $farmstead->masters->person_name }}</a></td> 
            <td class="pl"><a href="/persons/{{ $farmstead->owner }}">{{ $farmstead->owners->person_name }}</a></td> 
            <td class="pl"><a href="/dynasties/{{ $farmstead->dynasty }}">{{ $farmstead->dynasties->dynasty_name }}</a></td> 
            <td class="pl"><a href="/region/{{ $farmstead->region }}">{{ $farmstead->regions->region_name }}</td> 
        </tr>
    @endforeach
    </tbody>
	<thead>
        <tr> 
            <th class="lg">Farmstead</th>     
            <th class="lg">Master</th>
            <th class="lg" colspan="2">Owner</th>
            <th class="lg">Region</th>
        </tr>
	</thead>
    </table>
    </div>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $farmsteads->links() }}
	</div>
</div>
</div>
@else
<div class="container">					
					<h1>Farmsteads List</h1>
                    <p>No farmsteads</p>
					</div>
@endif

@endsection