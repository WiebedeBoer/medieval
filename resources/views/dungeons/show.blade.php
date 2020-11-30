@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
<h1>Dungeon of {{ $dungeon->places->place_name }}</h1>

@if($dungeon->dungeon_master >2)
<h2>Dungeon Master</h2>
<p><a href="/persons/{{$dungeon->dungeon_master}}">{{ $dungeon->masters->person_name }}</a></p>
@endif
</div> 
@if(@prisoner_count >=1)
<div class="container-fluid justify-content-center">
	<div class="py-5">
    <h2>Prisoners</h2>	
	<table class="table-striped tablesorter table">
	<thead>
        <tr>      
            <th class="lg">Prisoner</th>
            <th class="lg">Gender</th>
            <th class="lg">Renown</th>
            <th class="lg">Piety</th>
            <th class="lg">Gold</th>
        </tr>
	</thead>
	<tbody>	
    @foreach($prisoners as $prisoner)
        <tr>
            <td class="pl"><a href="/persons/{{ $prisoner->prisoner }}">{{ $prisoner->captives->person_name }}</a></td> 
            <td class="pl">{{ $prisoner->captives->gender }}</td> 
            <td class="pl">{{ $prisoner->captives->renown }}</td> 
            <td class="pl">{{ $prisoner->captives->piety }}</td> 
            <td class="pl">{{ $prisoner->captives->gold }}</td> 
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>
</div>
@endif
@endsection