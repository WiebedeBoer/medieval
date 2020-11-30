@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
@if(@brigade_count >=1)
<div class="container">					
	<h1>Brigades List</h1>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $brigades->links() }}
	</div>
</div>
</div>
<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
        <tr>      
            <th class="lg">Captain</th>
            <th class="lg">Brigade</th>
            <th class="lg">Soldiers</th>
            <th class="lg">Training</th>
            <th class="lg">Morale</th>
            <th class="lg">Army</th>
        </tr>
	</thead>
	<tbody>	
    @foreach($brigades as $brigade)
        <tr>
        @if(is_null($brigade->captain))
            <td class="pl">&nbsp;</td>
        @else
            <td class="pl"><a href="/persons/{{ $brigade->captain }}">{{ $brigade->captains->person_name }}</a></td> 
        @endif            
            <td class="pl"><a href="/brigades/{{ $brigade->brigade_id }}">{{ $brigade->brigade }}</a></td> 
            <td class="pl">{{ $brigade->soldiers }}</td> 
            <td class="pl">{{ $brigade->training }}</td> 
            <td class="pl">{{ $brigade->morale }}</td> 
            <td class="pl"><a href="/armies/{{ $brigade->army }}">{{ $brigade->armies->army_name }}</a></td>
        </tr>
    @endforeach
    </tbody>
	<thead>
        <tr>      
            <th class="lg">Captain</th>
            <th class="lg">Brigade</th>
            <th class="lg">Soldiers</th>
            <th class="lg">Training</th>
            <th class="lg">Morale</th>
            <th class="lg">Army</th>
        </tr>
	</thead>
    </table>
    </div>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $brigades->links() }}
	</div>
</div>
</div>
@endif

@endsection