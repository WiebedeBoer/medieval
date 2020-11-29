@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

@if($prisoner_count >=1)
<div class="container">					
					<h1>Prisoners List</h1>
					</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $prisoners->links() }}
	</div>
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
        @foreach($prisoners as $prisoner)
            <td class="pl"><a href="/persons/{{ $prisoner->prisoner }}">{{ $prisoner->captives->person_name }}</a></td> 
            <td class="pl">{{ $prisoner->captives->gender }}</td> 
            <td class="pl">{{ $prisoner->captives->renown }}</td> 
            <td class="pl">{{ $prisoner->captives->piety }}</td> 
            <td class="pl">{{ $prisoner->captives->gold }}</td> 
        @endforeach
        </tr>
    </tbody>
	<thead>
        <tr>      
            <th class="lg">Prisoner</th>
            <th class="lg">Gender</th>
            <th class="lg">Renown</th>
            <th class="lg">Piety</th>
            <th class="lg">Gold</th>
        </tr>
	</thead>
    </table>
    </div>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $prisoners->links() }}
	</div>
</div>
</div>
@else
<div class="container">					
					<h1>Prisoners List</h1>
                    <p>No prisoners</p>
					</div>
@endif

@endsection