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
<div class="container">
	
	<div class="py-3">				
<div class="float-left ml-3">
<div class="crb">
<div class="inline-block"><a href="/culture/{{ $regiondata->cultures->culture_id }}">{{ $regiondata->cultures->culture_name }}</a></div>
@if($regiondata->cultures->manorial_culture ==5)
<div class="inline-block">
<a href="/religion/5"><img src="{{ asset('img/images/belief_islam.png') }}" width="48" height="48" alt="belief" title="Muslim"></a>
</div>
@elseif($regiondata->cultures->manorial_culture ==4)
<div class="inline-block">
<a href="/religion/4"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="Greek Orthodox"></a>
</div>
@elseif($regiondata->cultures->manorial_culture ==2)
<div class="inline-block">
<a href="/religion/2"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="Serbian Orthodox"></a>
</div>
@elseif($regiondata->cultures->manorial_culture ==3)
<div class="inline-block">
<a href="/religion/3"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="Russian Orthodox"></a>
</div>
@else
<div class="inline-block">
<a href="/religion/1"><img src="{{ asset('img/images/belief_catholic.png') }}" width="48" height="48" alt="belief" title="Catholic"></a>
</div>
@endif
</div>
</div>
</div>	
				
<!--name-->				
<h1>{{$regiondata->region_name}}</h1>
</div>
<!--places-->								
@if($places >=1)
	<div class="container-fluid justify-content-center">
	<div class="py-3">	
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
	@foreach($placedata as $place) 
	<tr>
	<td class="plname"><a href="/place/{{ $place->place_id }}">{{ $place->place_name }}</a></td>
	<td class="pl"><a href="/region/{{ $place->region }}">{{ $place->regions->region_name }}</a></td>
	
	
	<!--population-->
	@if ($place->population >=10000)
		<td class="rimetro">{{ $place->population }}</td>
	@elseif ($place->population >=2000 && $place->population <10000)
		<td class="ricity">{{ $place->population }}</td>
	@elseif ($place->population >=600 && $place->population <2000)
		<td class="ritown">{{ $place->population }}</td>
	@elseif ($place->population >=120 && $place->population <600)
		<td class="rivillage">{{ $place->population }}</td>
	@else
		<td class="rihamlet">{{ $place->population }}</td>
	@endif	
	
	<!--fortification-->
	@if($place->fortification =="mountain_castle")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/building_castle.png') }}" width="48" height="48" alt="fortification" title="castle"></td>
	@elseif($place->fortification =="water_castle")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/building_castle.png') }}" width="48" height="48" alt="fortification" title="castle"></td>
	@elseif($place->fortification =="bishop_palace" || $place->fortification =="papal_palace")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/misc_incense_burner.png') }}" width="48" height="48" alt="fortification" title="city"></td>
	@elseif($place->fortification =="abbey_grange")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/misc_leadlight_window.png') }}" width="48" height="48" alt="fortification" title="abbey"></td>
	@elseif($place->fortification =="fortified_abbey")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/misc_leadlight_window.png') }}" width="48" height="48" alt="fortification" title="abbey"></td>
	@elseif($place->fortification =="abbey_scriptorium")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/misc_book.png') }}" width="48" height="48" alt="fortification" title="abbey"></td>			
	@elseif($place->fortification =="royal_court")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/misc_throne.png') }}" width="48" height="48" alt="fortification" title="royal court"></td>
	@elseif($place->fortification =="chancery")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/misc_throne.png') }}" width="48" height="48" alt="fortification" title="chancery"></td>
	@elseif($place->fortification =="burgh")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>
	@elseif($place->fortification =="town_hall")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>
	@elseif($place->fortification =="ducal_residence")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>
	@elseif($place->fortification =="roadside_inn")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>	
	@elseif($place->fortification =="none")
		<td class="pl">&nbsp;</td>	
	@else
		<td class="pl">{{ $place->fortification }}</td>
	@endif	
	<!--commerce-->
	<!--minerals-->
	@if($place->commerce =="lead")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/lead.png') }}" width="48" height="48" alt="trade good" title="lead"></td>
	@elseif($place->commerce =="gold")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/gold.png') }}" width="48" height="48" alt="trade good" title="gold"></td>	
	@elseif($place->commerce =="silver")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/silver.png') }}" width="48" height="48" alt="trade good" title="silver"></td>
	@elseif($place->commerce =="iron")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/iron.png') }}" width="48" height="48" alt="trade good" title="iron"></td>	
	@elseif($place->commerce =="tin")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/tin.png') }}" width="48" height="48" alt="trade good" title="tin"></td>
	<!--gems-->
	@elseif($place->commerce =="emeralds")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/emerald.png') }}" width="48" height="48" alt="trade good" title="emerald"></td>	
	@elseif($place->commerce =="sapphire")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/sapphire.png') }}" width="48" height="48" alt="trade good" title="sapphire"></td>	
	@elseif($place->commerce =="rubies")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/ruby.png') }}" width="48" height="48" alt="trade good" title="ruby"></td>		
	<!--salt-->	
	@elseif($place->commerce =="salt")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/salt.png') }}" width="48" height="48" alt="trade good" title="salt"></td>			
	<!--cloth-->	
	@elseif($place->commerce =="silk")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/silk.png') }}" width="48" height="48" alt="trade good" title="silk"></td>
	@elseif($place->commerce =="flax")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/flax.png') }}" width="48" height="48" alt="trade good" title="flax"></td>
	@elseif($place->commerce =="none")
		<td class="pl">&nbsp;</td>	
	@else
		<td class="pl">{{ $place->commerce }}</td>
	@endif
	<!--factory-->
	@if($place->factory =="scriptorium")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/paper.png') }}" width="48" height="48" alt="trade good" title="scriptorium"></td>
	@elseif($place->factory =="fishery")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fish.png') }}" width="48" height="48" alt="trade good" title="fishery"></td>	
	@elseif($place->factory =="granary")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/flour.png') }}" width="48" height="48" alt="trade good" title="granary"></td>	
	@elseif($place->factory =="soapmaker")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/soap.png') }}" width="48" height="48" alt="trade good" title="soap"></td>	
	@elseif($place->factory =="mint")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/coins.png') }}" width="48" height="48" alt="trade good" title="mint"></td>
	@elseif($place->factory =="cooper")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/barrel.png') }}" width="48" height="48" alt="trade good" title="cooper"></td>	
	@elseif($place->factory =="fur")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fur.png') }}" width="48" height="48" alt="trade good" title="furrier"></td>	
	@elseif($place->factory =="bookbinder")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/book_western.png') }}" width="48" height="48" alt="trade good" title="bookbinder"></td>	
	@elseif($place->factory =="glasswork")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/glasswork.png') }}" width="48" height="48" alt="trade good" title="glasswork"></td>	
	@elseif($place->factory =="ivory")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/ivory.png') }}" width="48" height="48" alt="trade good" title="ivory"></td>	
	@elseif($place->factory =="cloth")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fabrics.png') }}" width="48" height="48" alt="trade good" title="clothier"></td>	
	@elseif($place->factory =="none")
		<td class="pl">&nbsp;</td>			
	@else
		<td class="pl">{{ $place->factory }}</td>
	@endif	
	<!--arms-->
	@if($place->arms =="smithy")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/sword.png') }}" width="48" height="48" alt="arms" title="smithy"></td>	
	@elseif($place->arms =="armorer" || $place->arms =="plate")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/shield.png') }}" width="48" height="48" alt="arms" title="armorer"></td>
	@elseif($place->arms =="shipyard")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/misc_anchor.png') }}" width="48" height="48" alt="arms" title="shipyard"></td>	
	@elseif($place->arms =="none")
		<td class="pl">&nbsp;</td>		
	@else
		<td class="pl">{{ $place->arms }}</td>
	@endif	
	<!--education-->
	@if($place->education =="hospice")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/book_rare.png') }}" width="48" height="48" alt="education" title="hospice"></td>			
	@elseif($place->education =="library")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/paper.png') }}" width="48" height="48" alt="education" title="libary"></td>
	@elseif($place->education =="university")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/book_block.png') }}" width="48" height="48" alt="education" title="university"></td>	
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
</div>
@endif		


@endsection