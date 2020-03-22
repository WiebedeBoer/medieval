@extends('layouts.manual')
@section('title')
Manual
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manual</div>
                <div class="card-body">
					<div class="container">
						<h1>Commerce</h1>
<div class="py-3">
<p>Common goods such as foodstuffs and raw materials are produced by settlers on the virgates of lands. These can be produced everywhere, but the yield of timber varies according to the climate. Desert and steppe yield little timber. Some vills have local bonus buildings that give a higher production yield for some resources.</p>
<img src="{{ asset('img/trees/zones.png') }}" width="100%" height="auto" alt="climate zones tree" title="climate zones tree">
</div>

<div class="py-5 border-top">						
<h2 class="m"><a name="transportation">Trade &amp; Production</a></h2>
<div class="py-3">
<p>A whole range of workshops and businesses can produce goods from resources.</p>
<img src="{{ asset('img/trees/businesses.png') }}" width="100%" height="auto" alt="business tree" title="business tree">
</div>

						
<div class="py-5 border-top">						
<h2 class="m"><a name="transportation">Transportation</a></h2>
<p>Transportation is required to haul trade goods across land and sea.</p>
<div class="py-3">
<h3>Trade</h3>
<p>A merchant settler can be recruited in a trade caravan. A horse or cattle may be required for recruitment.</p>
<p>A bedouin settler can also be recruited in a trade caravan, but is limited to a camel caravan.</p>
<table class="tablesorter table">
<thead>
<tr><th colspan="2" class="ma">Trader</th><th class="ma">Required Animal</th><th class="ma">Maximum Cargo</th><th class="ma">Required Research</th></tr>
</thead>
<tbody>
<tr><th class="ma">Pedlar</th><td class="b"><img src="{{ asset('img/trade_units/pedlar.png') }}" width="125" height="75" alt="unit"></td><td class="u">&nbsp;</td><td class="b">1 load</td><td class="u">&nbsp;</td></tr>
<tr><th class="ma">Pack Horse</th><td class="b"><img src="{{ asset('img/trade_units/pack_horse.png') }}" width="125" height="75" alt="unit"></td><td class="b">horse</td><td class="b">2 load</td><td class="u">&nbsp;</td></tr>
<tr><th class="ma">Ox Cart</th><td class="b"><img src="{{ asset('img/trade_units/ox_cart.png') }}" width="125" height="75" alt="unit"></td><td class="b">cattle</td><td class="b">4 load</td><td class="u">&nbsp;</td></tr>
<tr><th class="ma">Trade Cart</th><td class="b"><img src="{{ asset('img/trade_units/trade_cart.png') }}" width="125" height="75" alt="unit"></td><td class="b">horse</td><td class="b">5 load</td><td class="b">horse collar</td></tr>
<tr><th class="ma">Camel Caravan</th><td class="b"><img src="{{ asset('img/trade_units/camel_caravan.png') }}" width="125" height="75" alt="unit"></td><td class="b">camel</td><td class="b">6 load</td><td class="u">&nbsp;</td></tr>
</tbody>
</table>
</div>
<div class="py-3">
<h3>Ships</h3>
<p>A captain settler can be recruited as infantry, but if attached to a port, then it can be recruited for steering a ship. A merchant settler can also be recruited for steering a ship. Textiles and timber is required for the construction of a ship.</p>
<table class="tablesorter table">
<thead>
<tr><th colspan="2" class="ma">Ship</th><th class="ma">Maximum Cargo</th><th class="ma">Required Timber</th><th class="ma">Required Textiles</th><th class="ma">Required Research</th></tr>
</thead>
<tbody>
<tr><th class="ma">Knarr</th><td class="b"><img src="{{ asset('img/ships/knarr.png') }}" width="60" height="30" alt="ship"></td><td class="b">24 load</td><td class="b">4</td><td class="b">2</td><td class="b">knarr</td></tr>
<tr><th class="ma">Cog</th><td class="b"><img src="{{ asset('img/ships/cog.png') }}" width="60" height="30" alt="ship"></td><td class="b">40 load</td><td class="b">6</td><td class="b">4</td><td class="b">cog</td></tr>
<tr><th class="ma">Hulk</th><td class="b"><img src="{{ asset('img/ships/hulk.png') }}" width="60" height="30" alt="ship"></td><td class="b">40 load</td><td class="b">7</td><td class="b">5</td><td class="b">hulk</td></tr>
<tr><th class="ma">Carrack</th><td class="b"><img src="{{ asset('img/ships/carrack.png') }}" width="60" height="30" alt="ship"></td><td class="b">60 load</td><td class="b">9</td><td class="b">6</td><td class="b">carrack</td></tr>
<tr><th class="ma">Caravel</th><td class="b"><img src="{{ asset('img/ships/caravel.png') }}" width="60" height="30" alt="ship"></td><td class="b">50 load</td><td class="b">8</td><td class="b">6</td><td class="b">caravel</td></tr>
</tbody>
</table>

<h3>Bedouin</h3>

<p>Bedouin can be used for camel caravans and can herd camels. This type of settler is only available to the Arabic culture.</p>

<table class="tablesorter table">
<thead>
<tr><th colspan="3" class="ma">Workers</th><th class="ma">Workplace</th></tr>
</thead>
<tbody>
<tr><th class="ma">Bedouin</th><td class="b"><img src="{{ asset('img/units/bedouin.png') }}" width="90" height="70" alt="unit"></td><td class="b">herds camels</td><td class="b">Pasture</td></tr>
</tbody>
</table>


</div>
</div>						
						
						
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection