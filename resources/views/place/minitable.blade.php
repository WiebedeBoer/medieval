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
	<tr><th>Industries</th>
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
	<!--foodstuff-->		
	@elseif($placedata->commerce =="grain")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/grains.png') }}" width="48" height="48" alt="trade good" title="grain"></td>
	@elseif($placedata->commerce =="cheese")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/cheese.png') }}" width="48" height="48" alt="trade good" title="cheese"></td>
	@elseif($placedata->commerce =="olive_oil")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/oil.png') }}" width="48" height="48" alt="trade good" title="olive oil"></td>
	@elseif($placedata->commerce =="fruit")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fruits.png') }}" width="48" height="48" alt="trade good" title="fruit"></td>
	@elseif($placedata->commerce =="dates")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/dates.png') }}" width="48" height="48" alt="trade good" title="dates"></td>
	@elseif($placedata->commerce =="wine")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/wine.png') }}" width="48" height="48" alt="trade good" title="wine"></td>	
	<!--sweeeteners-->	
	@elseif($placedata->commerce =="sugar")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/sugar.png') }}" width="48" height="48" alt="trade good" title="sugar"></td>
	@elseif($placedata->commerce =="salt")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/salt.png') }}" width="48" height="48" alt="trade good" title="salt"></td>
	@elseif($placedata->commerce =="honey")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/honey.png') }}" width="48" height="48" alt="trade good" title="honey"></td>		
	<!--meats-->
	@elseif($placedata->commerce =="poultry")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/poultry.png') }}" width="48" height="48" alt="trade good" title="poultry"></td>
	@elseif($placedata->commerce =="pigs")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/pigs.png') }}" width="48" height="48" alt="trade good" title="pigs"></td>		
	@elseif($placedata->commerce =="duck")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/duck_meat.png') }}" width="48" height="48" alt="trade good" title="duck"></td>		
	<!--cloth-->	
	@elseif($placedata->commerce =="wool")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/wool.png') }}" width="48" height="48" alt="trade good" title="wool"></td>	
	@elseif($placedata->commerce =="silk")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/silk.png') }}" width="48" height="48" alt="trade good" title="silk"></td>
	@elseif($placedata->commerce =="flax")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/flax.png') }}" width="48" height="48" alt="trade good" title="flax"></td>
	@elseif($placedata->commerce =="none")
		<td class="pl">&nbsp;</td>	
	@else
		<td class="pl">{{ $placedata->commerce }}</td>
	@endif	
	<!--factory-->
	@if($placedata->factory =="scriptorium")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/paper.png') }}" width="48" height="48" alt="trade good" title="scriptorium"></td>
	@elseif($placedata->factory =="windmill")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/flour.png') }}" width="48" height="48" alt="trade good" title="windmill"></td>	
	@elseif($placedata->factory =="fishery")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fish.png') }}" width="48" height="48" alt="trade good" title="fishery"></td>	
	@elseif($placedata->factory =="granary")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/flour.png') }}" width="48" height="48" alt="trade good" title="granary"></td>	
	@elseif($placedata->factory =="tailor")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fabrics.png') }}" width="48" height="48" alt="trade good" title="tailor"></td>	
	@elseif($placedata->factory =="leather")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/leather.png') }}" width="48" height="48" alt="trade good" title="leather"></td>	
	@elseif($placedata->factory =="soapmaker")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/soap.png') }}" width="48" height="48" alt="trade good" title="soap"></td>	
	@elseif($placedata->factory =="mint")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/coins.png') }}" width="48" height="48" alt="trade good" title="mint"></td>
	@elseif($placedata->factory =="cooper")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/barrel.png') }}" width="48" height="48" alt="trade good" title="cooper"></td>	
	<!--dyes-->	
	@elseif($placedata->factory =="madder")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/madder.png') }}" width="48" height="48" alt="trade good" title="madder"></td>	
	@elseif($placedata->factory =="woad")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/woad.png') }}" width="48" height="48" alt="trade good" title="woad"></td>	
	@elseif($placedata->factory =="potterer")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/pottery.png') }}" width="48" height="48" alt="trade good" title="potterer"></td>	
	@elseif($placedata->factory =="saffron")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/spices.png') }}" width="48" height="48" alt="trade good" title="saffron"></td>	
	@elseif($placedata->factory =="vintner")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/wine.png') }}" width="48" height="48" alt="trade good" title="wine"></td>	
	@elseif($placedata->factory =="fuller")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/wool.png') }}" width="48" height="48" alt="trade good" title="fuller"></td>	
	@elseif($placedata->factory =="fur")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fur.png') }}" width="48" height="48" alt="trade good" title="furrier"></td>	
	@elseif($placedata->factory =="bookbinder")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/book_western.png') }}" width="48" height="48" alt="trade good" title="bookbinder"></td>	
	@elseif($placedata->factory =="watermill")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/flour.png') }}" width="48" height="48" alt="trade good" title="watermill"></td>	
	@elseif($placedata->factory =="glasswork")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/glasswork.png') }}" width="48" height="48" alt="trade good" title="glasswork"></td>	
	@elseif($placedata->factory =="ivory")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/ivory.png') }}" width="48" height="48" alt="trade good" title="ivory"></td>	
	@elseif($placedata->factory =="smithy")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/tools.png') }}" width="48" height="48" alt="trade good" title="smithy"></td>			
	@elseif($placedata->factory =="cloth")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fabrics.png') }}" width="48" height="48" alt="trade good" title="clothier"></td>	
	@elseif($placedata->factory =="none")
		<td class="pl">&nbsp;</td>			
	@else
		<td class="pl">{{ $placedata->factory }}</td>
	@endif		
	<!--arms-->
	@if($placedata->arms =="smithy")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/sword.png') }}" width="48" height="48" alt="arms" title="smithy"></td>	
	@elseif($placedata->arms =="armorer")
		<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/shield.png') }}" width="48" height="48" alt="arms" title="armorer"></td>
	@elseif($placedata->arms =="shipyard")
		<td class="pl"><img class="tbi" src="{{ asset('img/images/misc_anchor.png') }}" width="48" height="48" alt="arms" title="shipyard"></td>	
	@elseif($placedata->arms =="none")
		<td class="pl">&nbsp;</td>		
	@else
		<td class="pl">{{ $placedata->arms }}</td>
	@endif	
	</tr>	
	<!--education-->
	<tr><th>Education</th>
	@if($placedata->education =="hospice")
		<td class="pl" colspan="3"><img class="tbi" src="{{ asset('img/tradegoods/book_rare.png') }}" width="48" height="48" alt="education" title="hospice"></td>			
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
	<tr><th>Agriculture</th><td class="pl" colspan="3">{{ $placedata->agr }}</td></tr>
	<tr><th>Commerce</th><td class="pl" colspan="3">{{ $placedata->com }}</td></tr>
	<tr><th>Defenses</th><td class="pl" colspan="3">{{ $placedata->def }}</td></tr>
	<tr><th>Justice &amp; Loyalty</th><td class="pl" colspan="3">{{ $placedata->jus }}</td></tr>
	</tbody>
	</table>
</div>
