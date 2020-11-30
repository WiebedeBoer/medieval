@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
<h1>{{ $farmstead->steadnames->farmstead_name }}</h1>
</div> 
<div class="container-fluid justify-content-center">
	<div class="py-5">
	<table class="table-striped tablesorter table">
	<thead>
        <tr>      
            <th class="lg">Master</th>
            <th class="lg" colspan="2">Owner</th>
            <th class="lg">Region</th>
        </tr>
	</thead>
	<tbody>
        <tr>
            <td class="pl"><a href="/persons/{{ $farmstead->master }}">{{ $farmstead->masters->person_name }}</a></td> 
            <td class="pl"><a href="/persons/{{ $farmstead->owner }}">{{ $farmstead->owners->person_name }}</a></td> 
            <td class="pl"><a href="/dynasties/{{ $farmstead->dynasty }}">{{ $farmstead->dynasties->dynasty_name }}</a></td> 
            <td class="pl"><a href="/region/{{ $farmstead->region }}">{{ $farmstead->regions->region_name }}</a></td> 
        </tr>
    </tbody>
    </table>
    </div>
</div>

@endsection