@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
<h1>{{ $prisoner->captives->person_name }}</h1>
</div>

<div class="container-fluid justify-content-center">
	<div class="py-5">
    <h2>Dungeon</h2>
    <p><a href="/dungeons/{{$prisoner->dungeon}}">Go to Dungeon</a></p>
    </div>
</div>


<div class="container-fluid justify-content-center">
	<div class="py-5">
    <h2>Prisoner</h2>	
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
        <tr>
            <td class="pl"><a href="/persons/{{ $prisoner->prisoner }}">{{ $prisoner->captives->person_name }}</a></td> 
            <td class="pl">{{ $prisoner->captives->gender }}</td> 
            <td class="pl">{{ $prisoner->captives->renown }}</td> 
            <td class="pl">{{ $prisoner->captives->piety }}</td> 
            <td class="pl">{{ $prisoner->captives->gold }}</td> 
        </tr>
    </tbody>
    </table>
    </div>
</div>

@endsection