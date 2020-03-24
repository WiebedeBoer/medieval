@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
					<h1>World Map (View)</h1>
@include('region.mapmenu')

<div class="wmin py-1">
@foreach($fortdata as $fort)
<br>{{ $fort->fortification }}
@endforeach
<br>
@foreach($fuedata as $feudal)
<br>{{ $feudal->feudal }}
@endforeach
<br>
@foreach($disdata as $church)
<br>{{ $church->church }}
@endforeach
<br>
@foreach($civdata as $civ)
<br>{{ $civ->civil }}
@endforeach
<br>
@foreach($mondata as $mon)
<br>{{ $mon->monastic }}
@endforeach
</div>

<div class="wmin">
@foreach($placedata as $place)
<!--mayor-->
@if ($place->population >=600)
<br>DB::table('titles')->insert([
<br>&nbsp;'title_name' => '[lord-mayor] of {{ $place->place_name }}',
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
<br>&nbsp;'rank' => '3',
<br>&nbsp;'career' => 'fixed_burgher'
<br>]);
<br>
@else
	
<!--sheriff-->
@if ($place->feudal =="count")
<br>DB::table('titles')->insert([
<br>&nbsp;'title_name' => '[sheriff] of {{ $place->place_name }}',
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
<br>&nbsp;'rank' => '3',
<br>&nbsp;'career' => 'fixed_peasantry'
<br>]);
<br>
<!--bailiff-->
@elseif ($place->feudal =="baron")
<br>DB::table('titles')->insert([
<br>&nbsp;'title_name' => '[bailiff] of {{ $place->place_name }}',
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
<br>&nbsp;'rank' => '3',
<br>&nbsp;'career' => 'fixed_peasantry'
<br>]);
<br>
@else
<br>DB::table('titles')->insert([
<br>&nbsp;'title_name' => '[reeve] of {{ $place->place_name }}',
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
<br>&nbsp;'rank' => '3',
<br>&nbsp;'career' => 'fixed_peasantry'
<br>]);
<br>	
@endif

	
@endif




	
@endforeach
</div>
@endsection