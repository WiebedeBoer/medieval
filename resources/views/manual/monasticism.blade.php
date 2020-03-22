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
					<h1>Monasticism</h1>
<div class="py-5 border-top">	
<h2 class="m">Monks &amp; Crusaders</h2>				
<p>Monks are only available to the <i>Catholic</i> and <i>Orthodox</i> beliefs, while <Ii>Muslims</i> have <i>Dervishes</i>. Orthodox have only regular monks and abbots. Therefore settlers such as the crusader, the grandmaster, and the friar are unique to Catholics.</p>
<p>This means that only Catholics can create <i>crusader states</i>.</p>
<p>The ruler of an abbey is never <i>Lord Paramount</i> in the feudal hierarchy.</p>
</div>

<div class="py-5 border-top">
<h2 class="m">Monastic Orders</h2>

<p>Every <i>Catholic</i> abbey belongs to a monastic order. There are 3 categories of monastic orders, namely: mendicant, monastic, and chivalric. Each type of order attracts a different kind of settler.</p>

<table class="tablesorter table">
<thead>
<tr><th class="ma">order</th><th class="ma">settler</th></tr>
</thead>
<tbody>
<tr><td class="b">mendicant</td><td class="b">friar</td></tr>
<tr><td class="b">monastic</td><td class="b">monk</td></tr>
<tr><td class="b">chivalric</td><td class="b">crusader</td></tr>
</tbody>
</table>

<p>Monastic orders follow a set of rules known as a chapter. Each type of chapter alters the appearance of the monks and military insignia.</p>

<table class="tablesorter table">
<thead>
<tr><th class="ma">habit</th><th class="ma">military insignia</th><th class="ma">mendicant</th><th class="ma">monastic</th><th class="ma">chivalric</th></tr>
</thead>
<tbody>
<tr><td class="b"><img src="{{ asset('img/images/habit_black.png') }}" width="15" height="31" alt="habit"></td><td class="b"><img src="{{ asset('img/images/order_knights_hospitaller.png') }}" width="30" height="30" alt="order"></td><td class="u">&nbsp;</td><td class="b">Benedictine</td><td class="b">Knights Hospitaller</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/habit_black.png') }}" width="15" height="31" alt="habit"></td><td class="b"><img src="{{ asset('img/images/order_teutonic_knights.png') }}" width="30" height="30" alt="order"></td><td class="b">Augustinian</td><td class="u">&nbsp;</td><td class="b">Teutonic Knights</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/habit_white.png') }}" width="15" height="31" alt="habit"></td><td class="b"><img src="{{ asset('img/images/order_knights_templar.png') }}" width="30" height="30" alt="order"></td><td class="u">&nbsp;</td><td class="b">Cistercian</td><td class="b">Knights Templar</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/habit_gray.png') }}" width="15" height="31" alt="habit"></td><td class="b"><img src="{{ asset('img/images/order_knights_cross.png') }}" width="30" height="30" alt="order"></td><td class="b">Franciscan</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/habit_brown.png') }}" width="15" height="31" alt="habit"></td><td class="b"><img src="{{ asset('img/images/order_knights_st_mary.png') }}" width="30" height="30" alt="order"></td><td class="b">Carmelite</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
</tbody>
</table>
</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection