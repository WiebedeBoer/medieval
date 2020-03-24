@extends('layouts.manual')
@section('title')
Manual
@endsection
@section('content')

					<h1>Farming</h1>
<div class="py-5 border-top">
<h2 class="m"><a name="climate">Climate</a></h2>
<p>The presence of forest or fallow fields varies according to the climate.</p>
<img src="{{ asset('img/trees/zones.png') }}" width="100%" height="auto" alt="climate zones tree" title="climate zones tree">
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="crops">Crops</a></h2>
<p>Crops can be grown on fields. Wheat can be grown everywhere, but the yield is higher in vills with a <i>grain farm</i> speciality.</p>
<div class="py-3">
<h3>Vineyards</h3>
<p>Muslims do not produce wine. Wine can be produced in vills that have a <i>vineyard</i> speciality.</p>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="livestock">Livestock</a></h2>
<p>Livestock can be kept on pastures. Livestock is kept for cheese, meat, wool and as draught animals. Leather can also be produced in vills that have a <i>leatherwork</i> speciality. The yield for wool is higher in vills with the <i>sheep pasture</i> speciality.</p>

<div class="py-3">
<h3>Livestock</h3>
<table class="tablesorter table">
<thead>
<tr><th colspan="2" class="ma">Livestock</th><th class="ma">Meat</th><th class="ma">Wool</th><th class="ma">Cheese</th></tr>
</thead>
<tbody>
<tr><th class="ma">Chickens</th><td class="b"><img src="{{ asset('img/livestock/chickens.png') }}" width="80" height="80" alt="livestock"></td><td class="b"><img src="{{ asset('img/tradegoods/poultry.png') }}"></td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><th class="ma">Ducks</th><td class="b"><img src="{{ asset('img/livestock/ducks.png') }}" width="80" height="80" alt="livestock"></td><td class="b"><img src="{{ asset('img/tradegoods/poultry.png') }}"></td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><th class="ma">Goat</th><td class="b"><img src="{{ asset('img/livestock/goat_british.png') }}" width="80" height="80" alt="livestock"></td><td class="b"><img src="{{ asset('img/tradegoods/lamb.png') }}"></td><td class="b"><img src="{{ asset('img/tradegoods/wool.png') }}"></td><td class="b"><img src="{{ asset('img/tradegoods/cheese.png') }}"></td></tr>
<tr><th class="ma">Sheep</th><td class="b"><img src="{{ asset('img/livestock/sheep_churra.png') }}" width="80" height="80" alt="livestock"></td><td class="b"><img src="{{ asset('img/tradegoods/lamb.png') }}"></td><td class="b"><img src="{{ asset('img/tradegoods/wool.png') }}"></td><td class="b"><img src="{{ asset('img/tradegoods/cheese.png') }}"></td></tr>
<tr><th class="ma">Pig</th><td class="b"><img src="{{ asset('img/livestock/pig.png') }}" width="80" height="80" alt="livestock"></td><td class="b"><img src="{{ asset('img/tradegoods/ham.png') }}"></td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><th class="ma">Cow</th><td class="b"><img src="{{ asset('img/livestock/cow_friesian.png') }}" width="80" height="80" alt="livestock"></td><td class="b"><img src="{{ asset('img/tradegoods/beef.png') }}"></td><td class="u">&nbsp;</td><td class="b"><img src="{{ asset('img/tradegoods/cheese.png') }}"></td></tr>
<tr><th class="ma">Horse</th><td class="b"><img src="{{ asset('img/livestock/horse_rouncey.png') }}" width="80" height="80" alt="livestock"></td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><th class="ma">Camel</th><td class="b"><img src="{{ asset('img/livestock/camel.png') }}" width="80" height="80" alt="livestock"></td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
</tbody>
</table>
<p>Chickens, ducks, and pigs are primarily reared for their meat. Muslims do not rear pigs.</p>
<table class="tablesorter table">
<thead>
<tr><th colspan="2" class="ma">Livestock</th><th class="ma">Meat Yield</th><th class="ma">Pack Animal</th></tr>
</thead>
<tbody>
<tr><th class="ma">Chickens</th><td class="b"><img src="{{ asset('img/livestock/chickens.png') }}" width="80" height="80" alt="livestock"></td><td class="b">1</td><td class="u">&nbsp;</td></tr>
<tr><th class="ma">Ducks</th><td class="b"><img src="{{ asset('img/livestock/ducks.png') }}" width="80" height="80" alt="livestock"></td><td class="b">1</td><td class="u">&nbsp;</td></tr>
<tr><th class="ma">Pig</th><td class="b"><img src="{{ asset('img/livestock/pig.png') }}" width="80" height="80" alt="livestock"></td><td class="b">9</td><td class="u">&nbsp;</td></tr>
<tr><th class="ma">Camel</th><td class="b"><img src="{{ asset('img/livestock/camel.png') }}" width="80" height="80" alt="livestock"></td><td class="b">7</td><td class="b">3</td></tr>
</tbody>
</table>
<p>Camels are primarily used as pack animals. Camels can be reared in most areas with a desert and hot steppe climate.</p>
<p>A variety of cattle, sheep and goat breeds are available. All varieties of cattle, sheep, and goats are local to a culture.</p>
</div>
<div class="py-3">
<h3>Horses</h3>
<p>A variety of horses are available. Some types are better suited for battle, while others are better suited for riding or trade.</p>
<p>All types of horses are available across the known world, though some types are more valuable.</p>
<table class="tablesorter table">
<thead>
<tr><th colspan="2" class="ma">Horse</th><th class="ma">Warhorse</th><th class="ma">Riding Horse</th><th class="ma">Pack Horse</th><th class="ma">Draught Horse</th></tr>
</thead>
<tbody>
<tr><th class="ma">destrier</th><td class="b"><img src="{{ asset('img/livestock/horse_destrier.png') }}" width="80" height="80" alt="livestock"></td><td class="b">3</td><td class="b">1</td><td class="b">2</td><td class="b">7</td></tr>
<tr><th class="ma">courser</th><td class="b"><img src="{{ asset('img/livestock/horse_courser.png') }}" width="80" height="80" alt="livestock"></td><td class="b">2</td><td class="b">2</td><td class="b">1</td><td class="b">6</td></tr>
<tr><th class="ma">jennet</th><td class="b"><img src="{{ asset('img/livestock/horse_jennet.png') }}" width="80" height="80" alt="livestock"></td><td class="b">2</td><td class="b">3</td><td class="b">1</td><td class="b">6</td></tr>
<tr><th class="ma">palfrey</th><td class="b"><img src="{{ asset('img/livestock/horse_palfrey.png') }}" width="80" height="80" alt="livestock"></td><td class="b">1</td><td class="b">3</td><td class="b">1</td><td class="b">7</td></tr>
<tr><th class="ma">hackney</th><td class="b"><img src="{{ asset('img/livestock/horse_hackney.png') }}" width="80" height="80" alt="livestock"></td><td class="b">1</td><td class="b">2</td><td class="b">2</td><td class="b">7</td></tr>
<tr><th class="ma">rouncey</th><td class="b"><img src="{{ asset('img/livestock/horse_rouncey.png') }}" width="80" height="80" alt="livestock"></td><td class="b">2</td><td class="b">2</td><td class="b">2</td><td class="b">7</td></tr>
<tr><th class="ma">sumpter</th><td class="b"><img src="{{ asset('img/livestock/horse_sumpter.png') }}" width="80" height="80" alt="livestock"></td><td class="b">1</td><td class="b">1</td><td class="b">3</td><td class="b">7</td></tr>
</tbody>
</table>
</div>
</div>

@endsection