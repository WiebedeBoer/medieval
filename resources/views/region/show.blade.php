@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<!--audio-->
@if($user->audio ==1)
	<audio id="imperia" autoplay loop>
			<source id="parade" src="{{ asset('music/'.$regiondata->cultures->troubadour.'.mp3') }}" type="audio/mp3">
	</audio> 
@endif
<!--culture-->
	<div class="py-3">				
<div class="float-left ml-3">
<div class="inline-block"><a href="/culture/{{ $regiondata->cultures->culture_id }}">{{ $regiondata->cultures->culture_name }}</a></div>
@if($regiondata->cultures->manorial_culture =="Muslim")
<div class="inline-block">
<a href="/culture/{{ $regiondata->cultures->culture_id }}"><img src="{{ asset('img/images/belief_islam.png') }}" width="48" height="48" alt="belief" title="{{ $regiondata->cultures->manorial_culture }}"></a>
</div>
@elseif($regiondata->cultures->manorial_culture =="Greek Orthodox")
<div class="inline-block">
<a href="/culture/{{ $regiondata->cultures->culture_id }}"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="{{ $regiondata->cultures->manorial_culture }}"></a>
</div>
@elseif($regiondata->cultures->manorial_culture =="Serbian Orthodox")
<div class="inline-block">
<a href="/culture/{{ $regiondata->cultures->culture_id }}"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="{{ $regiondata->cultures->manorial_culture }}"></a>
</div>
@elseif($regiondata->cultures->manorial_culture =="Russian Orthodox")
<div class="inline-block">
<a href="/culture/{{ $regiondata->cultures->culture_id }}"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="{{ $regiondata->cultures->manorial_culture }}"></a>
</div>
@else
<div class="inline-block">
<a href="/culture/{{ $regiondata->cultures->culture_id }}"><img src="{{ asset('img/images/belief_catholic.png') }}" width="48" height="48" alt="belief" title="{{ $regiondata->cultures->manorial_culture }}"></a>
</div>
@endif
</div>
</div>					
<!--name-->				
<h1>{{$regiondata->region_name}}</h1>
<!--places-->								
@if($places >=1)
	<div class="d-flex justify-content-center col-8 py-3">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Place</th>
		<th class="lg">Region</th>
		<th class="lg">Population</th>
		<th class="lg">Fortification</th>
		<th colspan="3" class="cg">Commerce &amp; Industries</th>
		<th class="lg">Education</th>
	</tr>
	</thead>
	<tbody>	
	@foreach($regiondata->places as $place) 
	<tr>
	<td class="pl"><a href="/place/{{ $place->place_id }}">{{ $place->place_name }}</a></td>
	<td class="pl"><a href="/region/{{ $place->region }}">{{ $place->regions->region_name }}</a></td>
	<td class="ri">{{ $place->population }}</td>
	@if($place->fortification =="mountain_castle")
		<td class="pl"><img src="{{ asset('img/images/building_castle.png') }}" width="48" height="48" alt="fortification" title="castle"></td>
	@elseif($place->fortification =="water_castle")
		<td class="pl"><img src="{{ asset('img/images/building_castle.png') }}" width="48" height="48" alt="fortification" title="castle"></td>
	@elseif($place->fortification =="bishop_palace")
		<td class="pl"><img src="{{ asset('img/images/misc_incense_burner.png') }}" width="48" height="48" alt="fortification" title="city"></td>
	@elseif($place->fortification =="abbey_grange")
		<td class="pl"><img src="{{ asset('img/images/misc_leadlight_window.png') }}" width="48" height="48" alt="fortification" title="abbey"></td>
	@elseif($place->fortification =="fortified_abbey")
		<td class="pl"><img src="{{ asset('img/images/misc_leadlight_window.png') }}" width="48" height="48" alt="fortification" title="abbey"></td>
	@elseif($place->fortification =="abbey_scriptorium")
		<td class="pl"><img src="{{ asset('img/images/misc_book.png') }}" width="48" height="48" alt="fortification" title="abbey"></td>			
	@elseif($place->fortification =="royal_court")
		<td class="pl"><img src="{{ asset('img/images/misc_throne.png') }}" width="48" height="48" alt="fortification" title="royal court"></td>
	@elseif($place->fortification =="chancery")
		<td class="pl"><img src="{{ asset('img/images/misc_throne.png') }}" width="48" height="48" alt="fortification" title="chancery"></td>
	@elseif($place->fortification =="burgh")
		<td class="pl"><img src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>
	@elseif($place->fortification =="town_hall")
		<td class="pl"><img src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>
	@elseif($place->fortification =="ducal_residence")
		<td class="pl"><img src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>
	@elseif($place->fortification =="roadside_inn")
		<td class="pl"><img src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>	
	@elseif($place->fortification =="none")
		<td class="pl">&nbsp;</td>	
	@else
		<td class="pl">{{ $place->fortification }}</td>
	@endif	
	<!--commerce-->
	<!--minerals-->
	@if($place->commerce =="lead")
		<td class="pl"><img src="{{ asset('img/tradegoods/lead.png') }}" width="48" height="48" alt="trade good" title="lead"></td>
	@elseif($place->commerce =="gold")
		<td class="pl"><img src="{{ asset('img/tradegoods/gold.png') }}" width="48" height="48" alt="trade good" title="gold"></td>	
	@elseif($place->commerce =="silver")
		<td class="pl"><img src="{{ asset('img/tradegoods/silver.png') }}" width="48" height="48" alt="trade good" title="silver"></td>
	@elseif($place->commerce =="iron")
		<td class="pl"><img src="{{ asset('img/tradegoods/iron.png') }}" width="48" height="48" alt="trade good" title="iron"></td>	
	@elseif($place->commerce =="tin")
		<td class="pl"><img src="{{ asset('img/tradegoods/tin.png') }}" width="48" height="48" alt="trade good" title="tin"></td>
	<!--gems-->
	@elseif($place->commerce =="emeralds")
		<td class="pl"><img src="{{ asset('img/tradegoods/emerald.png') }}" width="48" height="48" alt="trade good" title="emerald"></td>	
	@elseif($place->commerce =="sapphire")
		<td class="pl"><img src="{{ asset('img/tradegoods/sapphire.png') }}" width="48" height="48" alt="trade good" title="sapphire"></td>	
	@elseif($place->commerce =="rubies")
		<td class="pl"><img src="{{ asset('img/tradegoods/ruby.png') }}" width="48" height="48" alt="trade good" title="ruby"></td>		
	<!--foodstuff-->		
	@elseif($place->commerce =="grain")
		<td class="pl"><img src="{{ asset('img/tradegoods/grains.png') }}" width="48" height="48" alt="trade good" title="grain"></td>
	@elseif($place->commerce =="cheese")
		<td class="pl"><img src="{{ asset('img/tradegoods/cheese.png') }}" width="48" height="48" alt="trade good" title="cheese"></td>
	@elseif($place->commerce =="olive_oil")
		<td class="pl"><img src="{{ asset('img/tradegoods/oil.png') }}" width="48" height="48" alt="trade good" title="olive oil"></td>
	@elseif($place->commerce =="fruit")
		<td class="pl"><img src="{{ asset('img/tradegoods/fruits.png') }}" width="48" height="48" alt="trade good" title="fruit"></td>
	@elseif($place->commerce =="dates")
		<td class="pl"><img src="{{ asset('img/tradegoods/dates.png') }}" width="48" height="48" alt="trade good" title="dates"></td>
	@elseif($place->commerce =="wine")
		<td class="pl"><img src="{{ asset('img/tradegoods/wine.png') }}" width="48" height="48" alt="trade good" title="wine"></td>	
	<!--sweeeteners-->	
	@elseif($place->commerce =="sugar")
		<td class="pl"><img src="{{ asset('img/tradegoods/sugar.png') }}" width="48" height="48" alt="trade good" title="sugar"></td>
	@elseif($place->commerce =="salt")
		<td class="pl"><img src="{{ asset('img/tradegoods/salt.png') }}" width="48" height="48" alt="trade good" title="salt"></td>
	@elseif($place->commerce =="honey")
		<td class="pl"><img src="{{ asset('img/tradegoods/honey.png') }}" width="48" height="48" alt="trade good" title="honey"></td>		
	<!--meats-->
	@elseif($place->commerce =="poultry")
		<td class="pl"><img src="{{ asset('img/tradegoods/poultry.png') }}" width="48" height="48" alt="trade good" title="poultry"></td>
	@elseif($place->commerce =="pigs")
		<td class="pl"><img src="{{ asset('img/tradegoods/pigs.png') }}" width="48" height="48" alt="trade good" title="pigs"></td>		
	@elseif($place->commerce =="duck")
		<td class="pl"><img src="{{ asset('img/tradegoods/duck_meat.png') }}" width="48" height="48" alt="trade good" title="duck"></td>		
	<!--cloth-->	
	@elseif($place->commerce =="wool")
		<td class="pl"><img src="{{ asset('img/tradegoods/wool.png') }}" width="48" height="48" alt="trade good" title="wool"></td>	
	@elseif($place->commerce =="silk")
		<td class="pl"><img src="{{ asset('img/tradegoods/silk.png') }}" width="48" height="48" alt="trade good" title="silk"></td>
	@elseif($place->commerce =="flax")
		<td class="pl"><img src="{{ asset('img/tradegoods/flax.png') }}" width="48" height="48" alt="trade good" title="flax"></td>
	@elseif($place->commerce =="none")
		<td class="pl">&nbsp;</td>	
	@else
		<td class="pl">{{ $place->commerce }}</td>
	@endif
	<!--factory-->
	@if($place->factory =="scriptorium")
		<td class="pl"><img src="{{ asset('img/tradegoods/paper.png') }}" width="48" height="48" alt="trade good" title="scriptorium"></td>
	@elseif($place->factory =="windmill")
		<td class="pl"><img src="{{ asset('img/tradegoods/flour.png') }}" width="48" height="48" alt="trade good" title="windmill"></td>	
	@elseif($place->factory =="fishery")
		<td class="pl"><img src="{{ asset('img/tradegoods/fish.png') }}" width="48" height="48" alt="trade good" title="fishery"></td>	
	@elseif($place->factory =="granary")
		<td class="pl"><img src="{{ asset('img/tradegoods/flour.png') }}" width="48" height="48" alt="trade good" title="granary"></td>	
	@elseif($place->factory =="tailor")
		<td class="pl"><img src="{{ asset('img/tradegoods/fabrics.png') }}" width="48" height="48" alt="trade good" title="tailor"></td>	
	@elseif($place->factory =="leather")
		<td class="pl"><img src="{{ asset('img/tradegoods/leather.png') }}" width="48" height="48" alt="trade good" title="leather"></td>	
	@elseif($place->factory =="soapmaker")
		<td class="pl"><img src="{{ asset('img/tradegoods/soap.png') }}" width="48" height="48" alt="trade good" title="soap"></td>	
	@elseif($place->factory =="mint")
		<td class="pl"><img src="{{ asset('img/tradegoods/coins.png') }}" width="48" height="48" alt="trade good" title="mint"></td>
	@elseif($place->factory =="cooper")
		<td class="pl"><img src="{{ asset('img/tradegoods/barrel.png') }}" width="48" height="48" alt="trade good" title="cooper"></td>	
	<!--dyes-->	
	@elseif($place->factory =="madder")
		<td class="pl"><img src="{{ asset('img/tradegoods/madder.png') }}" width="48" height="48" alt="trade good" title="madder"></td>	
	@elseif($place->factory =="woad")
		<td class="pl"><img src="{{ asset('img/tradegoods/woad.png') }}" width="48" height="48" alt="trade good" title="woad"></td>	
	@elseif($place->factory =="potterer")
		<td class="pl"><img src="{{ asset('img/tradegoods/pottery.png') }}" width="48" height="48" alt="trade good" title="potterer"></td>	
	@elseif($place->factory =="saffron")
		<td class="pl"><img src="{{ asset('img/tradegoods/spices.png') }}" width="48" height="48" alt="trade good" title="saffron"></td>	
	@elseif($place->factory =="vintner")
		<td class="pl"><img src="{{ asset('img/tradegoods/wine.png') }}" width="48" height="48" alt="trade good" title="wine"></td>	
	@elseif($place->factory =="fuller")
		<td class="pl"><img src="{{ asset('img/tradegoods/wool.png') }}" width="48" height="48" alt="trade good" title="fuller"></td>	
	@elseif($place->factory =="fur")
		<td class="pl"><img src="{{ asset('img/tradegoods/fur.png') }}" width="48" height="48" alt="trade good" title="furrier"></td>	
	@elseif($place->factory =="bookbinder")
		<td class="pl"><img src="{{ asset('img/tradegoods/book_western.png') }}" width="48" height="48" alt="trade good" title="bookbinder"></td>	
	@elseif($place->factory =="watermill")
		<td class="pl"><img src="{{ asset('img/tradegoods/flour.png') }}" width="48" height="48" alt="trade good" title="watermill"></td>	
	@elseif($place->factory =="glasswork")
		<td class="pl"><img src="{{ asset('img/tradegoods/glasswork.png') }}" width="48" height="48" alt="trade good" title="glasswork"></td>	
	@elseif($place->factory =="ivory")
		<td class="pl"><img src="{{ asset('img/tradegoods/ivory.png') }}" width="48" height="48" alt="trade good" title="ivory"></td>	
	@elseif($place->factory =="smithy")
		<td class="pl"><img src="{{ asset('img/tradegoods/tools.png') }}" width="48" height="48" alt="trade good" title="smithy"></td>			
	@elseif($place->factory =="cloth")
		<td class="pl"><img src="{{ asset('img/tradegoods/fabrics.png') }}" width="48" height="48" alt="trade good" title="clothier"></td>	
	@elseif($place->factory =="none")
		<td class="pl">&nbsp;</td>			
	@else
		<td class="pl">{{ $place->factory }}</td>
	@endif	
	<!--arms-->
	@if($place->arms =="smithy")
		<td class="pl"><img src="{{ asset('img/tradegoods/sword.png') }}" width="48" height="48" alt="arms" title="smithy"></td>	
	@elseif($place->arms =="armorer")
		<td class="pl"><img src="{{ asset('img/tradegoods/shield.png') }}" width="48" height="48" alt="arms" title="armorer"></td>
	@elseif($place->arms =="shipyard")
		<td class="pl"><img src="{{ asset('img/images/misc_anchor.png') }}" width="48" height="48" alt="arms" title="shipyard"></td>	
	@elseif($place->arms =="none")
		<td class="pl">&nbsp;</td>		
	@else
		<td class="pl">{{ $place->arms }}</td>
	@endif	
	<!--education-->
	@if($place->education =="hospice")
		<td class="pl"><img src="{{ asset('img/tradegoods/book_rare.png') }}" width="48" height="48" alt="education" title="hospice"></td>			
	@elseif($place->education =="library")
		<td class="pl"><img src="{{ asset('img/tradegoods/paper.png') }}" width="48" height="48" alt="education" title="libary"></td>
	@elseif($place->education =="university")
		<td class="pl"><img src="{{ asset('img/tradegoods/book_block.png') }}" width="48" height="48" alt="education" title="university"></td>	
	@elseif($place->education =="none")
		<td class="pl">&nbsp;</td>		
	@else
		<td class="pl">{{ $place->education }}</td>
	@endif	
	</tr>    
	@endforeach
		</tbody>
	<thead>
	<tr>
		<th class="lg">Place</th>
		<th class="lg">Region</th>
		<th class="lg">Population</th>
		<th class="lg">Fortification</th>
		<th colspan="3" class="cg">Commerce &amp; Industries</th>
		<th class="lg">Education</th>
	</tr>
	</thead>
</table>
</div>
@endif		


@endsection