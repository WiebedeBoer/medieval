@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<!--audio-->
@if($user->audio ==1)
	<audio id="imperia" autoplay loop>
			<source id="parade" src="{{ asset('music/'.$culturedata->troubadour.'.mp3') }}" type="audio/mp3">
	</audio> 
@endif
<div class="container">

<div class="py-3">					
<div class="float-left ml-3">
<div class="crb">
@if($culturedata->manorial_culture =="Muslim")
<div class="inline-block">
<a href="/religion/2"><img src="{{ asset('img/images/belief_islam.png') }}" width="48" height="48" alt="belief" title="{{ $culturedata->manorial_culture }}"></a>
</div>
@elseif($culturedata->manorial_culture =="Greek Orthodox")
<div class="inline-block">
<a href="/religion/4"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="{{ $culturedata->manorial_culture }}"></a>
</div>
@elseif($culturedata->manorial_culture =="Serbian Orthodox")
<div class="inline-block">
<a href="/religion/3"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="{{ $culturedata->manorial_culture }}"></a>
</div>
@elseif($culturedata->manorial_culture =="Russian Orthodox")
<div class="inline-block">
<a href="/religion/5"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="{{ $culturedata->manorial_culture }}"></a>
</div>
@else
<div class="inline-block">
<a href="/religion/1"><img src="{{ asset('img/images/belief_catholic.png') }}" width="48" height="48" alt="belief" title="{{ $culturedata->manorial_culture }}"></a>
</div>
@endif
</div>
</div>	
</div>					
					
<h1>{{ $culturedata->culture_name }}</h1>
</div>

							
@if($regions >=1)
	<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Region</th>	
		<th class="lg">Style</th>
		<th class="lg">Ride</th>
		<th class="lg">Herb</th>
		<th class="lg">Goat</th>
		<th class="lg">Sheep</th>
		<th class="lg">Cattle</th>
	</tr>
	</thead>
	<tbody>		
	@foreach($regiondata as $region) 
    <tr>
	<td>
	<a href="/region/{{ $region->region_id }}">{{ $region->region_name }}</a>
	</td>
	<td>	
	@if($region->style =="bazaar")
		<img class="tbi" src="{{ asset('img/trade_units/camel_caravan.png') }}" width="48" height="48" alt="ride" title="trade fair">
	@elseif($region->style =="caravan")
		<img class="tbi" src="{{ asset('img/trade_units/camel_caravan.png') }}" width="48" height="48" alt="ride" title="trade caravan">
	@elseif($region->style =="coaching")
		<img class="tbi" src="{{ asset('img/trade_units/trade_cart.png') }}" width="48" height="48" alt="ride" title="coaching inn">	
	@elseif($region->style =="fair")
		<img class="tbi" src="{{ asset('img/trade_units/trade_cart.png') }}" width="48" height="48" alt="ride" title="trade fair">
	@elseif($region->style =="falconry")
		<img class="tbi" src="{{ asset('img/tradegoods/falcon.png') }}" width="48" height="48" alt="ride" title="falconer">
	@elseif($region->style =="hunt")
		<img class="tbi" src="{{ asset('img/tradegoods/deer.png') }}" width="48" height="48" alt="ride" title="hunting ground">	
	@elseif($region->style =="joust")
		<img class="tbi" src="{{ asset('img/images/weapon_lance.png') }}" width="48" height="48" alt="ride" title="tiltyard">
	@elseif($region->style =="minstrel")
		<img class="tbi" src="{{ asset('img/tradegoods/beer.png') }}" width="48" height="48" alt="ride" title="minstrel">
	@elseif($region->style =="reliquary")
		<img class="tbi" src="{{ asset('img/tradegoods/relic.png') }}" width="48" height="48" alt="ride" title="relics">	
	@elseif($region->style =="tavern")
		<img class="tbi" src="{{ asset('img/tradegoods/beer.png') }}" width="48" height="48" alt="ride" title="tavern">		
	@else
		&nbsp;
	@endif		
	
	</td>
	<td>
	@if($region->ride =="camel")
		<img class="tbi" src="{{ asset('img/livestock/camel.png') }}" width="48" height="48" alt="ride" title="camel caravan">
	@elseif($region->ride =="stud")
		<img class="tbi" src="{{ asset('img/livestock/horse_palfrey.png') }}" width="48" height="48" alt="ride" title="stud farm">	
	@else
		&nbsp;
	@endif	
	</td>
	<td>
	@if($region->herb =="cedar")
		<img class="tbi" src="{{ asset('img/tradegoods/cedar.png') }}" width="48" height="48" alt="herb" title="{{ $region->herb }}">
	@elseif($region->herb =="elder")
		<img class="tbi" src="{{ asset('img/tradegoods/elder.png') }}" width="48" height="48" alt="herb" title="{{ $region->herb }}">
	@elseif($region->herb =="frankincense")
		<img class="tbi" src="{{ asset('img/tradegoods/incense.png') }}" width="48" height="48" alt="herb" title="{{ $region->herb }}">
	@elseif($region->herb =="heather")
		<img class="tbi" src="{{ asset('img/tradegoods/heather.png') }}" width="48" height="48" alt="herb" title="{{ $region->herb }}">
	@elseif($region->herb =="hops")
		<img class="tbi" src="{{ asset('img/tradegoods/hops.png') }}" width="48" height="48" alt="herb" title="{{ $region->herb }}">
	@elseif($region->herb =="lavender")
		<img class="tbi" src="{{ asset('img/tradegoods/lavender.png') }}" width="48" height="48" alt="herb" title="{{ $region->herb }}">
	@elseif($region->herb =="rosemary")
		<img class="tbi" src="{{ asset('img/tradegoods/rosemary.png') }}" width="48" height="48" alt="herb" title="{{ $region->herb }}">
	@else
		&nbsp;
	@endif
	</td>	
	<td>	
	@if($region->goat =="Alpine")
		<img class="tbi" src="{{ asset('img/livestock/goat_alpine.png') }}" width="48" height="48" alt="goat" title="{{ $region->goat }}">
	@elseif($region->goat =="Angora")
		<img class="tbi" src="{{ asset('img/livestock/goat_angora.png') }}" width="48" height="48" alt="goat" title="{{ $region->goat }}">
	@elseif($region->goat =="British")
		<img class="tbi" src="{{ asset('img/livestock/goat_british.png') }}" width="48" height="48" alt="goat" title="{{ $region->goat }}">	
	@elseif($region->goat =="Carpathian")
		<img class="tbi" src="{{ asset('img/livestock/goat_carpathian.png') }}" width="48" height="48" alt="goat" title="{{ $region->goat }}">
	@elseif($region->goat =="Cretan")
		<img class="tbi" src="{{ asset('img/livestock/goat_cretan.png') }}" width="48" height="48" alt="goat" title="{{ $region->goat }}">
	@elseif($region->goat =="Garganica")
		<img class="tbi" src="{{ asset('img/livestock/goat_garganica.png') }}" width="48" height="48" alt="goat" title="{{ $region->goat }}">
	@elseif($region->goat =="Maltese")
		<img class="tbi" src="{{ asset('img/livestock/goat_maltese.png') }}" width="48" height="48" alt="goat" title="{{ $region->goat }}">	
	@elseif($region->goat =="Murciana")
		<img class="tbi" src="{{ asset('img/livestock/goat_murciana.png') }}" width="48" height="48" alt="goat" title="{{ $region->goat }}">
	@elseif($region->goat =="Norwegian")
		<img class="tbi" src="{{ asset('img/livestock/goat_norwegian.png') }}" width="48" height="48" alt="goat" title="{{ $region->goat }}">
	@elseif($region->goat =="Poitou")
		<img class="tbi" src="{{ asset('img/livestock/goat_pitou.png') }}" width="48" height="48" alt="goat" title="{{ $region->goat }}">
	@elseif($region->goat =="Thuringian")
		<img class="tbi" src="{{ asset('img/livestock/goat_thuringian.png') }}" width="48" height="48" alt="goat" title="{{ $region->goat }}">			
	@else
		&nbsp;
	@endif
	</td>
	<td>	
	@if($region->sheep =="Arabi")
		<img class="tbi" src="{{ asset('img/livestock/sheep_arabi.png') }}" width="48" height="48" alt="sheep" title="{{ $region->sheep }}">
	@elseif($region->sheep =="Bardoka")
		<img class="tbi" src="{{ asset('img/livestock/sheep_bardoka.png') }}" width="48" height="48" alt="sheep" title="{{ $region->sheep }}">
	@elseif($region->sheep =="Churra")
		<img class="tbi" src="{{ asset('img/livestock/sheep_churra.png') }}" width="48" height="48" alt="sheep" title="{{ $region->sheep }}">
	@elseif($region->sheep =="East_Friesian")
		<img class="tbi" src="{{ asset('img/livestock/sheep_east_friesian.png') }}" width="48" height="48" alt="sheep" title="East Friesian">
	@elseif($region->sheep =="Fat_Tailed")
		<img class="tbi" src="{{ asset('img/livestock/sheep_fat_tailed.png') }}" width="48" height="48" alt="sheep" title="Fat Tailed">
	@elseif($region->sheep =="Herdwick")
		<img class="tbi" src="{{ asset('img/livestock/sheep_herdwick.png') }}" width="48" height="48" alt="sheep" title="{{ $region->sheep }}">
	@elseif($region->sheep =="Lincoln")
		<img class="tbi" src="{{ asset('img/livestock/sheep_lincoln.png') }}" width="48" height="48" alt="sheep" title="{{ $region->sheep }}">
	@elseif($region->sheep =="Merino")
		<img class="tbi" src="{{ asset('img/livestock/sheep_merino.png') }}" width="48" height="48" alt="sheep" title="{{ $region->sheep }}">
	@elseif($region->sheep =="Ryeland")
		<img class="tbi" src="{{ asset('img/livestock/sheep_ryeland.png') }}" width="48" height="48" alt="sheep" title="{{ $region->sheep }}">
	@elseif($region->sheep =="Short_tailed")
		<img class="tbi" src="{{ asset('img/livestock/sheep_short_tailed.png') }}" width="48" height="48" alt="sheep" title="Short Tailed">
	@elseif($region->sheep =="Thin_tailed")
		<img class="tbi" src="{{ asset('img/livestock/sheep_thin_tailed.png') }}" width="48" height="48" alt="sheep" title="Thin Tailed">
	@elseif($region->sheep =="Zaupelschaf")
		<img class="tbi" src="{{ asset('img/livestock/sheep_zaupelschaf.png') }}" width="48" height="48" alt="sheep" title="{{ $region->sheep }}">
	@else
		&nbsp;
	@endif
	</td>
	<td>
	@if($region->cattle =="Angeln")
		<img class="tbi" src="{{ asset('img/livestock/cow_angeln.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Anatolian")
		<img class="tbi" src="{{ asset('img/livestock/cow_anatolian.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Andalusian")
		<img class="tbi" src="{{ asset('img/livestock/cow_andalusian.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Blaarkop")
		<img class="tbi" src="{{ asset('img/livestock/cow_blaarkop.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Braunvieh")
		<img class="tbi" src="{{ asset('img/livestock/cow_braunvieh.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Charolais")
		<img class="tbi" src="{{ asset('img/livestock/cow_charolais.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Fjall")
		<img class="tbi" src="{{ asset('img/livestock/cow_fjall.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Fleckvieh")
		<img class="tbi" src="{{ asset('img/livestock/cow_fleckvieh.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Friesian")
		<img class="tbi" src="{{ asset('img/livestock/cow_friesian.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Gloucester")
		<img class="tbi" src="{{ asset('img/livestock/cow_gloucester.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Highland")
		<img class="tbi" src="{{ asset('img/livestock/cow_highland.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Irish_Moiled")
		<img class="tbi" src="{{ asset('img/livestock/cow_blaarkop.png') }}" width="48" height="48" alt="cattle" title="Irish Moiled">
	@elseif($region->cattle =="Limousine")
		<img class="tbi" src="{{ asset('img/livestock/cow_limousine.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Normanda")
		<img class="tbi" src="{{ asset('img/livestock/cow_normande.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Parthenais")
		<img class="tbi" src="{{ asset('img/livestock/cow_parthenais.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Piedmontese")
		<img class="tbi" src="{{ asset('img/livestock/cow_piedmontese.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Pirenaica")
		<img class="tbi" src="{{ asset('img/livestock/cow_pirenaica.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Podolian")
		<img class="tbi" src="{{ asset('img/livestock/cow_podolian.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@elseif($region->cattle =="Rotvieh")
		<img class="tbi" src="{{ asset('img/livestock/cow_rotvieh.png') }}" width="48" height="48" alt="cattle" title="{{ $region->cattle }}">
	@else
		&nbsp;
	@endif
	</td>
	</tr>
  @endforeach
  	</tbody>
	<thead>
	<tr>
		<th class="lg">Region</th>		
		<th class="lg">Style</th>
		<th class="lg">Ride</th>
		<th class="lg">Herb</th>
		<th class="lg">Goat</th>
		<th class="lg">Sheep</th>
		<th class="lg">Cattle</th>
	</tr>
	</thead>
</table>
</div>
</div>
@endif
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection