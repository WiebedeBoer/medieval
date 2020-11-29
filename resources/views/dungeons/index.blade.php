@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

@if($dungeon_count >=1)
<div class="container">					
					<h1>Dungeons List</h1>
					</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $dungeons->links() }}
	</div>
</div>
</div>

<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
        <tr>      
            <th class="lg">Dungeon</th>
            <th class="lg">Dungeon Master</th>
            <th class="lg">Prisoners</th>
        </tr>
	</thead>
	<tbody>	
    @foreach($dungeons as $dungeon)
        <tr>
            <td class="pl"><a href="/dungeons/{{ $dungeon->dungeon_id }}">{{ $dungeon->places->place_name }}</a></td> 
            <td class="pl"><a href="/persons/{{ $dungeon->dungeon_master }}">{{ $dungeon->masters->person_name }}</td> 
            <td class="pl">{{ $dungeon->prisoners->count() }}</td> 
        </tr>
    @endforeach
    </tbody>
	<thead>
        <tr>      
            <th class="lg">Dungeon</th>
            <th class="lg">Dungeon Master</th>
            <th class="lg">Prisoners</th>
        </tr>
	</thead>
    </table>
    </div>
</div>

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $dungeons->links() }}
	</div>
</div>
</div>
@else
<div class="container">					
					<h1>Dungeons List</h1>
                    <p>No dungeons</p>
					</div>
@endif

@endsection