@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')


<!--audio-->
@if($user->audio ==1)
	<audio id="imperia" autoplay loop>		
	@if($religion =="Muslim")
			<source id="parade" src="{{ asset('music/1000_maqam_rast_Shuruq.mp3') }}" type="audio/mp3">
	@elseif($religion =="Greek Orthodox")
		<source id="parade" src="{{ asset('music/1000_gregorian_Byzantine.mp3') }}" type="audio/mp3">
	@elseif($religion =="Serbian Orthodox")
		<source id="parade" src="{{ asset('music/1000_gregorian_Byzantine.mp3') }}" type="audio/mp3">
	@elseif($religion =="Russian Orthodox")
		<source id="parade" src="{{ asset('music/1000_gregorian_Byzantine.mp3') }}" type="audio/mp3">
	@else
		<source id="parade" src="{{ asset('music/1000_mozarabic_Terra_Terra.mp3') }}" type="audio/mp3">
	@endif	
	</audio> 
@endif

<!--image-->
<div class="container">

<div class="crb">
@if($religion =="Muslim")
<a href="/religion/5"><img src="{{ asset('img/images/belief_islam.png') }}" width="48" height="48" alt="belief" title="{{ $religion }}"></a>
@elseif($religion =="Greek Orthodox")
<a href="/religion/4"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="{{ $religion }}"></a>
@elseif($religion =="Serbian Orthodox")
<a href="/religion/2"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="{{ $religion }}"></a>
@elseif($religion =="Russian Orthodox")
<a href="/religion/3"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="{{ $religion }}"></a>
@else
<a href="/religion/1"><img src="{{ asset('img/images/belief_catholic.png') }}" width="48" height="48" alt="belief" title="{{ $religion }}"></a>
@endif	
</div>


		<h1>{{ $religion }} Religion</h1>
</div>

<div class="container-fluid justify-content-center">
					
<!--religion variance-->					
<div class="py-3">					
@if($religion =="Muslim")
<h3>Caliphs:</h3>
@elseif($religion =="Greek Orthodox")
<h3>Patriarch of Constantinople:</h3>
@elseif($religion =="Serbian Orthodox")
<h3>Patriarch of Bulgaria:</h3>
@elseif($religion =="Russian Orthodox")
<h3>Patriarch of Kiev:</h3>
@else
<h3>Pope:</h3>
@endif	
</div>					
					
<!--cultures-->
<div class="py-1">	
	<h3>Cultures</h3>
	</div>
	<div class="d-flex justify-content-center py-3">

	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Main Culture</th>		
		<th class="cg" colspan="3">Warrior Culture</th>
		<th class="lg">Trade Culture</th>
	</tr>
	</thead>
	<tbody>						
@foreach($religiondata as $religion_culture)
	<tr>
		<td class="pl"><a href="/culture/{{ $religion_culture->culture_id }}">{{ $religion_culture->culture_name }}</a></td>
		<td class="pl">
			@if($religion_culture->chivalry_culture =="Eastern")
				<img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->chivalry_culture }}">
			@elseif($religion_culture->chivalry_culture =="Arabic")
				<img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->chivalry_culture }}">
			@elseif($religion_culture->chivalry_culture =="Nordic")
				<img class="tbi" src="{{ asset('img/images/shield_1.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->chivalry_culture}}">
			@elseif($religion_culture->chivalry_culture =="Steppe")
				<img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->chivalry_culture}}">
			@else
				<img class="tbi" src="{{ asset('img/images/shield_1.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->chivalry_culture }}">
			@endif			
		</td>		
		<td class="pl">
			@if($religion_culture->warrior_culture =="Anglo-Saxon")
				<img class="tbi" src="{{ asset('img/images/style_frankish.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Arabic")
				<img class="tbi" src="{{ asset('img/images/style_moorish.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Balkan")
				<img class="tbi" src="{{ asset('img/images/style_byzantine.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Byzantine")
				<img class="tbi" src="{{ asset('img/images/style_byzantine.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Celtic")
				<img class="tbi" src="{{ asset('img/images/style_frankish.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Croatian")
				<img class="tbi" src="{{ asset('img/images/style_frankish.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Frankish")
				<img class="tbi" src="{{ asset('img/images/style_frankish.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="German")
				<img class="tbi" src="{{ asset('img/images/style_heaume.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Hungarian")
				<img class="tbi" src="{{ asset('img/images/style_frankish.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Italian")
				<img class="tbi" src="{{ asset('img/images/style_heaume.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Kievan Rus")
				<img class="tbi" src="{{ asset('img/images/style_nordic.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Mongol")
				<img class="tbi" src="{{ asset('img/images/style_mongol.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Polish")
				<img class="tbi" src="{{ asset('img/images/style_heaume.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Scandinavian")
				<img class="tbi" src="{{ asset('img/images/style_nordic.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Spanish")
				<img class="tbi" src="{{ asset('img/images/style_frankish.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@elseif($religion_culture->warrior_culture =="Turkish")
				<img class="tbi" src="{{ asset('img/images/style_mongol.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@else
				<img class="tbi" src="{{ asset('img/images/style_heaume.png') }}" width="48" height="48" alt="armour" title="{{ $religion_culture->warrior_culture }}">
			@endif			
		</td>
		<td class="pl">		
			@if($religion_culture->commercial_culture =="Oriental")
				<img class="tbi" src="{{ asset('img/images/weapon_composite_bow.png') }}" width="48" height="48" alt="merchant" title="{{ $religion_culture->commercial_culture }}">
			@else
				<img class="tbi" src="{{ asset('img/images/weapon_crossbow.png') }}" width="48" height="48" alt="merchant" title="{{ $religion_culture->commercial_culture }}">
			@endif	
		</td>
		<td class="pl">		
				{{ $religion_culture->commercial_culture }}	
		</td>			
	</tr>	
@endforeach
	</tbody>
	<thead>
	<tr>
		<th class="lg">Main Culture</th>		
		<th class="cg" colspan="3">Warrior Culture</th>
		<th class="lg">Trade Culture</th>
	</tr>
	</thead>
</table>
</div>
</div>

@endsection