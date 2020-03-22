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
					<h1>Church</h1>

<div class="py-5 border-top">
<h2 class="m"><a name="beliefs">Beliefs</a></h2>
<p>There are several different faiths. Faiths have a primate leader.</p>
<table class="tablesorter table">
<thead>
<tr><th colspan="2" class="mc">Belief</th><th class="ma">Primate</th><th class="ma">Succession</th></tr>
</thead>
<tbody>
<tr><td class="b"><img src="{{ asset('img/images/belief_catholic.png') }}" width="30" height="30" alt="belief"></td><th>Catholic</th><td class="b">Pope</td><td class="b">elected</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="30" height="30" alt="belief"></td><th>Orthodox</th><td class="b">Patriarch</td><td class="b">elected</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/belief_islam.png') }}" width="30" height="30" alt="belief"></td><th>Muslim</th><td class="b">Caliph</td><td class="b">dynastic</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/belief_pagan.png') }}" width="30" height="30" alt="belief"></td><th>Pagan</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/belief_tengrism.png') }}" width="30" height="30" alt="belief"></td><th>Tengrism</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/belief_judaism.png') }}" width="30" height="30" alt="belief"></td><th>Jewish</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
</tbody>
</table>
<div class="py-3">
<h3>Pope</h3>

<p>The Pope is the only primate for all Catholics. The Pope is also a secular ruler of a realm known as the Papal States. Rome is normally the capital of the Papal States. The Pope is elected from all Catholic Cardinals. Only Cardinals can be elected Pope and only the Pope installs the title of Cardinal to Bishops, Prince-Bishops, Archbishops, and Prince-Archbishops.</p>
<p>The Pope can excommunicate Catholics.</p>
<div class="py-3">
<h3>Patriarch</h3>
<p>An orthodox realm can have a Patriarch. The Patriarch is elected from one of all Bishops or Archbishops within that particular Orthodox realm and that particular domain.</p>
<div class="py-3">
<h3>Caliph</h3>
<p>A Caliph is also a secular leader of a muslim realm. Though a Caliph was initially elected from a Shura, the succession is dynastic.</p>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="worship">Place of Worship</a></h2>
<p>All faiths except for pagans can construct places of worship.</p>
<table class="tablesorter table">
<thead>
<tr><th colspan="2" class="mc">Belief</th><th class="mc" colspan="2">Place of Worship</th><th class="ma">Administration</th></tr>
</thead>
<tbody>
<tr><td class="b"><img src="{{ asset('img/images/belief_catholic.png') }}" width="40" height="40" alt="belief"></td><th>Catholic</th><td class="b"><img src="{{ asset('img/images/building_church_catholic.png') }}" width="40" height="40" alt="building"></td><td class="b">church</td><td class="b">priest</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="40" height="40" alt="belief"></td><th>Orthodox</th><td class="b"><img src="{{ asset('img/images/building_church_orthodox.png') }}" width="40" height="40" alt="building"></td><td class="b">church</td><td class="b">priest</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/belief_islam.png') }}" width="40" height="40" alt="belief"></td><th>Muslim</th><td class="b"><img src="{{ asset('img/images/building_mosque.png') }}" width="40" height="40" alt="building"></td><td class="b">mosque</td><td class="b">imam</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/belief_pagan.png') }}" width="40" height="40" alt="belief"></td><th>Pagan</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/belief_tengrism.png') }}" width="40" height="40" alt="belief"></td><th>Tengrism</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/belief_judaism.png') }}" width="40" height="40" alt="belief"></td><th>Jewish</th><td class="b"><img src="{{ asset('img/images/building_synagogue.png') }}" width="40" height="40" alt="building"></td><td class="b">synagogue</td><td class="b">cohen</td></tr>

</tbody>
</table>
<div class="py-3">
<h3>Cathedral</h3>
<img src="{{ asset('img/images/misc_leadlight_window.png') }}" width="40" height="40" alt="misc">
<p>If a church contains the seat of a Bishop or Archbishop, then it is known as a cathedral.</p>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="settlers">Settlers</a></h2>
<img src="{{ asset('img/images/misc_incense_burner.png') }}" width="40" height="40" alt="misc">
<p>Settlers of the clergy or monastic order primarily work on health, culture, piety and science in a vill.</p>
</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection