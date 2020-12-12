<!--minitable-->
<div class="minitable">
	<table class="table-striped tablesorter table">
	<tbody>
	<tr><th>Place</th><td class="pl" colspan="3">{{ $placedata->place_name }}</td></tr>
	<tr><th>Region</th><td class="pl" colspan="3"><a href="/region/{{ $placedata->region}}">{{ $placedata->regions->region_name }}</a></td></tr>
	<tr><th>Population</th><td class="pl" colspan="3">{{ $placedata->population }}</td></tr>	
	<tr><th>Fortification</th>
	@if($placedata->fortification =="mountain_castle")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/building_castle.png') }}" width="48" height="48" alt="fortification" title="castle"></td>
	@elseif($placedata->fortification =="water_castle")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/building_castle.png') }}" width="48" height="48" alt="fortification" title="castle"></td>
	@elseif($placedata->fortification =="bishop_palace")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/misc_incense_burner.png') }}" width="48" height="48" alt="fortification" title="city"></td>
	@elseif($placedata->fortification =="abbey_grange")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/misc_leadlight_window.png') }}" width="48" height="48" alt="fortification" title="abbey"></td>
	@elseif($placedata->fortification =="fortified_abbey")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/misc_leadlight_window.png') }}" width="48" height="48" alt="fortification" title="abbey"></td>
	@elseif($placedata->fortification =="abbey_scriptorium")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/misc_book.png') }}" width="48" height="48" alt="fortification" title="abbey"></td>			
	@elseif($placedata->fortification =="royal_court")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/misc_throne.png') }}" width="48" height="48" alt="fortification" title="royal court"></td>
	@elseif($placedata->fortification =="chancery")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/misc_throne.png') }}" width="48" height="48" alt="fortification" title="chancery"></td>
	@elseif($placedata->fortification =="burgh")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>
	@elseif($placedata->fortification =="town_hall")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>
	@elseif($placedata->fortification =="ducal_residence")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>
	@elseif($placedata->fortification =="roadside_inn")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/shield_2.png') }}" width="48" height="48" alt="fortification" title="burgh"></td>	
	@elseif($placedata->fortification =="none")
		<td class="pl" colspan="3">&nbsp;</td>	
	@else
		<td class="pl" colspan="3">{{ $placedata->fortification }}</td>
	@endif	
	</tr>	
	<!--commerce-->
	<!--minerals-->
	<tr><th>Commerce &amp; Industries</th>
	@if($placedata->commerce =="lead")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/lead.png') }}" width="48" height="48" alt="trade good" title="lead"></td>
	@elseif($placedata->commerce =="gold")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/gold.png') }}" width="48" height="48" alt="trade good" title="gold"></td>	
	@elseif($placedata->commerce =="silver")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/silver.png') }}" width="48" height="48" alt="trade good" title="silver"></td>
	@elseif($placedata->commerce =="iron")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/iron.png') }}" width="48" height="48" alt="trade good" title="iron"></td>	
	@elseif($placedata->commerce =="tin")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/tin.png') }}" width="48" height="48" alt="trade good" title="tin"></td>
	<!--gems-->
	@elseif($placedata->commerce =="emeralds")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/emerald.png') }}" width="48" height="48" alt="trade good" title="emerald"></td>	
	@elseif($placedata->commerce =="sapphire")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/sapphire.png') }}" width="48" height="48" alt="trade good" title="sapphire"></td>	
	@elseif($placedata->commerce =="rubies")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/ruby.png') }}" width="48" height="48" alt="trade good" title="ruby"></td>		
	<!--salt-->		
	@elseif($placedata->commerce =="salt")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/salt.png') }}" width="48" height="48" alt="trade good" title="salt"></td>	
	<!--cloth-->		
	@elseif($placedata->commerce =="silk")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/silk.png') }}" width="48" height="48" alt="trade good" title="silk"></td>
	@elseif($placedata->commerce =="flax")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/flax.png') }}" width="48" height="48" alt="trade good" title="flax"></td>
	@else
		<td class="pl">&nbsp;</td>	
	@endif	
	<!--factory-->
	<!--books and manuscripts-->
	@if($placedata->factory =="scriptorium")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/paper.png') }}" width="48" height="48" alt="trade good" title="scriptorium"></td>
	@elseif($placedata->factory =="bookbinder")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/book_western.png') }}" width="48" height="48" alt="trade good" title="bookbinder"></td>	
	<!--foodstuff-->
	@elseif($placedata->factory =="fishery")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fish.png') }}" width="48" height="48" alt="trade good" title="fishery"></td>
	<!--storage-->	
	@elseif($placedata->factory =="granary")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/flour.png') }}" width="48" height="48" alt="trade good" title="granary"></td>	
	@elseif($placedata->factory =="cooper")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/barrel.png') }}" width="48" height="48" alt="trade good" title="cooper"></td>	
	<!--clothing-->	
	@elseif($placedata->factory =="cloth")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fabrics.png') }}" width="48" height="48" alt="trade good" title="tailor"></td>	
	@elseif($placedata->factory =="fur")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fur.png') }}" width="48" height="48" alt="trade good" title="furrier"></td>	
	<!--luxury-->
	@elseif($placedata->factory =="soapmaker")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/soap.png') }}" width="48" height="48" alt="trade good" title="soap"></td>	
	@elseif($placedata->factory =="mint")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/coins.png') }}" width="48" height="48" alt="trade good" title="mint"></td>
	@elseif($placedata->factory =="glasswork")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/glasswork.png') }}" width="48" height="48" alt="trade good" title="glasswork"></td>	
	@elseif($placedata->factory =="ivory")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/ivory.png') }}" width="48" height="48" alt="trade good" title="ivory"></td>			
	@else
		<td class="pl">&nbsp;</td>			
	@endif		
	<!--arms-->
	@if($placedata->arms =="smithy")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/sword.png') }}" width="48" height="48" alt="arms" title="smithy"></td>	
	@elseif($placedata->arms =="armorer" || $placedata->arms =="plate")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/shield.png') }}" width="48" height="48" alt="arms" title="armorer"></td>
	@elseif($placedata->arms =="shipyard")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/misc_anchor.png') }}" width="48" height="48" alt="arms" title="shipyard"></td>	
	@else
		<td class="pl">&nbsp;</td>		
	@endif	
	</tr>	
	<!--education-->
	<tr><th>Health &amp; Education</th>
	@if($placedata->education =="hospice")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/images/asclepius.png') }}" width="48" height="48" alt="education" title="hospice"></td>			
	@elseif($placedata->education =="library")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/tradegoods/paper.png') }}" width="48" height="48" alt="education" title="libary"></td>
	@elseif($placedata->education =="university")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/tradegoods/book_block.png') }}" width="48" height="48" alt="education" title="university"></td>	
	@elseif($placedata->education =="none")
		<td class="pl" colspan="3">&nbsp;</td>		
	@else
		<td class="pl" colspan="3">{{ $placedata->education }}</td>
	@endif	
	</tr>
	<!--stats-->
	<tr><th>Agriculture</th><td class="pl" colspan="3">{{ $placedata->agr }}</td>

	</tr>
	<tr><th>Commerce</th><td class="pl" colspan="3">{{ $placedata->com }}</td>

	</tr>
	<tr><th>Defenses</th><td class="pl" colspan="3">{{ $placedata->def }}</td>

	</tr>
	<tr><th>Justice &amp; Loyalty</th><td class="pl" colspan="3">{{ $placedata->jus }}</td>

	</tr>
	</tbody>
	</table>
</div>

