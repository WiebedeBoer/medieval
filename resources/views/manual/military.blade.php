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
					<h1>Military</h1>

<div class="py-5 border-top">
<h2 class="m"><a name="recruitment">Military Recruitment</a></h2>
<div class="py-3">
<h3>Settlers</h3>
<p>All of the cavalry units are limited to gentry settlers.</p>
<p>Infantry units can be recruited from the: gentry, burgher, and peasantry settlers, but is limited to particular types of settlers for the burgher and peasantry classes.</p>
<p>The crusader knights are recruited from the crusader settler of the crusader order. Only Catholics can recruit crusaders.</p>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="equipment">Military Equipment</a></h2>
<p>The availability of some military equipment varies according to the culture.</p>
<div class="py-3">
<h3>Weapons &amp; Armor</h3>
<table class="tablesorter table">
<thead>
<tr><th colspan="2" class="ma">Equipment</th><th class="ma">Infantry Armament</th><th class="ma">Cavalry Armament</th><th class="ma">Armor Category</th></tr>
</thead>
<tbody>
<tr><td class="b"><img src="{{ asset('img/images/weapon_spear.png') }}" title="javelin" width="30" height="30" alt="weapon"></td><td class="b">Javelin</td><td class="b">javelin</td><td class="b">javelin</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_longbow.png') }}" title="longbow" width="30" height="30" alt="weapon"></td><td class="b">Longbow</td><td class="b">bow</td><td class="b">bow</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_crossbow.png') }}" title="crossbow" width="30" height="30" alt="weapon"></td><td class="b">Crossbow</td><td class="b">bow</td><td class="b">bow</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_composite_bow.png') }}" title="composite bow" width="30" height="30" alt="weapon"></td><td class="b">Composite Bow</td><td class="b">bow</td><td class="b">bow</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_matchlock.png') }}" title="matchlock" width="30" height="30" alt="weapon"></td><td class="b">Arquebus</td><td class="b">matchlock</td><td class="b">matchlock</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_spear.png') }}" title="spear" width="30" height="30" alt="weapon"></td><td class="b">Spear</td><td class="b">polearm (spear)</td><td class="b">spear</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_pike.png') }}" title="pike" width="30" height="30" alt="weapon"></td><td class="b">Pike</td><td class="b">polearm (spear)</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_billhook.png') }}" title="billhook" width="30" height="30" alt="weapon"></td><td class="b">Bill</td><td class="b">polearm (hook)</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_halberd.png') }}" title="halberd" width="30" height="30" alt="weapon"></td><td class="b">Halberd</td><td class="b">polearm (hook)</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_voulge.png') }}" title="voulge" width="30" height="30" alt="weapon"></td><td class="b">Voulge</td><td class="b">polearm (voulge)</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_tabarzin.png') }}" title="poleaxe" width="30" height="30" alt="weapon"></td><td class="b">Poleaxe</td><td class="b">polearm (blade)</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_guisarme.png') }}" title="guisarme" width="30" height="30" alt="weapon"></td><td class="b">Guisarme</td><td class="b">polearm</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_bardiche.png') }}" title="bardiche" width="30" height="30" alt="weapon"></td><td class="b">Bardiche</td><td class="b">polearm</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_morning_star.png') }}" title="mace" width="30" height="30" alt="weapon"></td><td class="b">Mace</td><td class="b">mace</td><td class="b">mace</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_axe.png') }}" title="axe" width="30" height="30" alt="weapon"></td><td class="b">Axe</td><td class="b">axe</td><td class="b">axe</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_sword.png') }}" title="sword" width="30" height="30" alt="weapon"></td><td class="b">Sword</td><td class="b">sword</td><td class="b">sword</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_falchion.png') }}" title="falchion" width="30" height="30" alt="weapon"></td><td class="b">Falchion</td><td class="b">sword</td><td class="b">sword</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_scimitar.png') }}" title="scimitar" width="30" height="30" alt="weapon"></td><td class="b">Scimitar</td><td class="b">sword</td><td class="b">sword</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/weapon_lance.png') }}" title="lance" width="30" height="30" alt="weapon"></td><td class="b">Lance</td><td class="u">&nbsp;</td><td class="b">lance</td><td class="u">&nbsp;</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/shield_1.png') }}" width="30" height="30" alt="shield"></td><td class="b">Heater Shield</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="b">shield</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/shield_2.png') }}" width="30" height="30" alt="shield"></td><td class="b">Round Shield</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="b">shield</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/shield_3.png') }}" width="30" height="30" alt="shield"></td><td class="b">Hungarian Shield</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="b">shield</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/style_heaume.png') }}" width="30" height="30" alt="helmet"></td><td class="b">Heaume</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="b">helmet</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/style_frankish.png') }}" width="30" height="30" alt="helmet"></td><td class="b">Bascinet</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="b">helmet</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/style_nordic.png') }}" width="30" height="30" alt="helmet"></td><td class="b">Helmet</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="b">helmet</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/style_byzantine.png') }}" width="30" height="30" alt="helmet"></td><td class="b">Nasal Helmet</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="b">helmet</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/style_moorish.png') }}" width="30" height="30" alt="helmet"></td><td class="b">Nasal Helmet</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="b">helmet</td></tr>
<tr><td class="b"><img src="{{ asset('img/images/style_mongol.png') }}" width="30" height="30" alt="helmet"></td><td class="b">Chichak Helmet</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="b">helmet</td></tr>
</tbody>
</table>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="units">Military Units</a></h2>
<p>The availability of military units varies according to the culture. Some cultures have unique military units. These special units are only available to that particular culture. Other common units are available to all cultures, though their equipment may vary.</p>
<div class="py-3">
<h3>Unit Statistics &amp; Requirements</h3>
<p>Military units have a particular set of statistics that include such things as damage and defense. Recruiting a unit costs armament points.</p>
</div>
<div class="py-3">
<h3>Crusaders</h3>
<p>A crusader settler can be one of the varies forms of crusader knights, the exact type depends on the order.</p>
<table class="tablesorter table">
<thead>
<tr><th colspan="2" class="ma">Unit</th><th class="ma">Weapon</th></tr>
</thead>
<tbody>
<tr>
<td class="b">Hospitaller Knight</td></td><td class="b"><img src="{{ asset('img/units/knight_hospitaller.png') }}" title="hospitaller knight" width="100" height="75" alt="unit"></td><td class="b">lance</td>
</tr>
<tr>
<td class="b">Templar Knight</td><td class="b"><img src="{{ asset('img/units/knight_templar.png') }}" title="templar knight" width="100" height="75" alt="unit"></td><td class="b">lance</td>
</tr>
<tr>
<td class="b">Teutonic Knight</td><td class="b"><img src="{{ asset('img/units/knight_teutonic.png') }}" title="teutonic knight" width="100" height="75" alt="unit"></td><td class="b">lance</td>
</tr>
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