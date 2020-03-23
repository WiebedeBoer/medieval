@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (View)</h1>
@include('region.mapmenu')

<div class="wmin py-1">
@foreach($disdata as $church)
<br>{{ $church->church }}
@endforeach
</div>

<div class="wmin py-1">
@foreach($civdata as $fort)
<br>{{ $fort->civil }}
@endforeach
</div>

<div class="wmin py-1">
@foreach($mondata as $fort)
<br>{{ $fort->monastic }}
@endforeach
</div>

<div class="wmin">
@foreach($placedata as $place)
<br>DB::table('titles')->insert([
<br>&nbsp;'title_name' => '[commander] of {{ $place->place_name }}',
<br>&nbsp;'region' => '{{ $place->region }}',
<br>&nbsp;'place' => '{{ $place->place_id }}',
@if($place->regions->culture ==42)
<br>&nbsp;'religion' => 'Russian Orthodox',
@elseif($place->regions->culture ==39 || $place->regions->culture ==40 || $place->regions->culture ==41)
<br>&nbsp;'religion' => 'Serbian Orthodox',
@elseif($place->regions->culture ==43 || $place->regions->culture ==44 || $place->regions->culture ==45)
<br>&nbsp;'religion' => 'Greek Orthodox',
@elseif($place->regions->culture >=46)
<br>&nbsp;'religion' => 'Muslim',
@else
<br>&nbsp;'religion' => 'Catholic',
@endif
<br>&nbsp;'rank' => '4',
<br>&nbsp;'career' => 'commander_teutonic'
<br>]);
<br>	
@endforeach
</div>
@endsection