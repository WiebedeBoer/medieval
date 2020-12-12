<!--minitable-->
<div class="minitable">
	<table class="table-striped tablesorter table">
	<tbody>

	<tr> 
    <th>Cattle</th>
	@if($placedata->regions->cattle !="none")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/cattle.png') }}" width="48" height="48" alt="cattle" title="cattle"></td>
	@else
	<td class="pl">&nbsp;</td>
	@endif
    <th>Dyes</th>
	@if($placedata->regions->dyes =="woad")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/book_block.png') }}" width="48" height="48" alt="woad" title="woad"></td>
	@elseif($placedata->regions->dyes =="madder")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/book_block.png') }}" width="48" height="48" alt="madder" title="madder"></td>
	@elseif($placedata->regions->dyes =="saffron")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/spices.png') }}" width="48" height="48" alt="saffron" title="saffron"></td>
	@else
	<td class="pl">&nbsp;</td>
	@endif
	</tr>

	<tr>
    <th>Sheep</th>
	@if($placedata->regions->sheep !="none")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/sheep.png') }}" width="48" height="48" alt="sheep" title="sheep"></td>
	@else
	<td class="pl">&nbsp;</td>
	@endif
    <th>Wine</th>
	@if($placedata->regions->wine !="none")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/wine.png') }}" width="48" height="48" alt="wine" title="wine"></td>
	@else
	<td class="pl">&nbsp;</td>
	@endif
	</tr>

	<tr>
    <th>Goat</th>
	@if($placedata->regions->goat !="none")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/goat.png') }}" width="48" height="48" alt="goat" title="goat"></td>
	@else
	<td class="pl">&nbsp;</td>
	@endif
    <th>Olive Oil</th>
	@if($placedata->regions->oil !="none")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/oil.png') }}" width="48" height="48" alt="olive oil" title="olive oil"></td>
	@else
	<td class="pl">&nbsp;</td>
	@endif
	</tr>

	<tr>
    <th>Pigs</th>
	@if($placedata->regions->pigs !="none")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/pigs.png') }}" width="48" height="48" alt="pigs" title="pigs"></td>
	@else
	<td class="pl">&nbsp;</td>
	@endif
    <th>Fruits</th>
	@if($placedata->regions->fruit =="fruit")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/fruits.png') }}" width="48" height="48" alt="fruit" title="fruit"></td>
	@elseif($placedata->regions->fruit =="dates")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/dates.png') }}" width="48" height="48" alt="dates" title="dates"></td>
	@else
	<td class="pl">&nbsp;</td>
	@endif
	</tr>

	<tr>
    <th>Poultry</th>
	@if($placedata->regions->poultry =="chicken")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/chicken.png') }}" width="48" height="48" alt="chicken" title="chicken"></td>
	@elseif($placedata->regions->poultry =="chicken")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/duck.png') }}" width="48" height="48" alt="duck" title="duck"></td>
	@else
	<td class="pl">&nbsp;</td>
	@endif
    <th>Sweeteners</th>
	@if($placedata->regions->sweetener =="honey")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/honey.png') }}" width="48" height="48" alt="honey" title="honey"></td>
	@elseif($placedata->regions->sweetener =="sugar")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/sugarcane.png') }}" width="48" height="48" alt="sugar" title="sugar"></td>
	@else
	<td class="pl">&nbsp;</td>
	@endif
	</tr>

	<tr>
    <th>Horse</th>
	@if($placedata->regions->ride =="stud")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/horse.png') }}" width="48" height="48" alt="horse" title="horse"></td>
	@elseif($placedata->regions->ride =="camel")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/camel.png') }}" width="48" height="48" alt="camel" title="camel"></td>
	@else
	<td class="pl">&nbsp;</td>
	@endif

    <th class="pl">Grain</th>
	@if($placedata->regions->grain =="wheat")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/grains.png') }}" width="48" height="48" alt="wheat" title="wheat"></td>
	@elseif($placedata->regions->grain =="barley")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/grains.png') }}" width="48" height="48" alt="barley" title="barley"></td>
	@elseif($placedata->regions->grain =="rye")
	<td class="pl"><img class="tbi" src="{{ asset('img/tradegoods/grains.png') }}" width="48" height="48" alt="rye" title="rye"></td>
	@else
	<td class="pl">&nbsp;</td>
    @endif
	</tr>

	</tbody>
	</table>
</div>	