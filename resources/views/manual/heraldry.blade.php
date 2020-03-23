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
					<h1>Heraldry</h1>

<div class="py-3 border-top">
<h2 class="m">Feudal Heraldry</h2>
<p>Holders of a title are entitled to insignia to denote their rank.</p>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="ranks">Feudal Ranks</a></h2>

<div class="py-3">
<h3>Feudal Ranks (Catholic)</h3>
<img src="{{ asset('img/images/belief_catholic.png') }}" width="30" height="30" alt="belief">
<table class="tablesorter table">
<thead>
<tr><th class="ma">Feudal Division</th><th class="ma">Gentry</th><th class="ma">Clergy</th><th class="ma">Monastic</th><th class="ma">Crusader</th><th class="ma">Courtier</th><th class="ma">Burgher</th><th class="ma">Commerce</th><th class="ma">Peasantry</th></tr>
</thead>
<tbody>
<tr>
<th class="l">Lord Paramount</th><th colspan="8" class="c">Sovereign</th>
</tr>
<tr>
<th class="ma">Kingdom</th><td class="ge">King</td><td class="cl">Pope</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Grand Duchy</th><td class="ge">Archduke</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Grand Duchy</th><td class="ge">Grand Duke</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="cr">Grandmaster</td><td class="u">&nbsp;</td><td class="bu">Doge</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Grand Duchy</th><td class="ge">Prince</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Tenant-in-Chief</th><th colspan="8" class="c">Non-Sovereign</th>
</tr>
<tr>
<th class="ma">Duchy</th><td class="ge">Prince</td><td class="cl">Prince-Archbishop</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Duchy</th><td class="ge">Duke</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="cr">Master Commander</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">March</th><td class="ge">Margrave</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Marshall</td><td class="bu">Viceroy</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">County</th><td class="ge">Count</td><td class="cl">Prince-Bishop</td><td class="mo">Prince-Abbot</td><td class="cr">Land Commander</td><td class="u">&nbsp;</td><td class="co">Steward</td><td class="u">&nbsp;</td><td class="pe">Sheriff</td>
</tr>
<tr>
<th class="ma">Castellany</th><td class="ca">Castellan</td><td class="u">&nbsp;</td><td class="mo">Prince-Provost</td><td class="cr">Knight Commander</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Mesne Lord</th><th colspan="8" class="c">Court Baron</th>
</tr>
<tr>
<th class="ma">Barony</th><td class="ge">Baron</td><td class="cl">Cardinal</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Barony</th><td class="u">&nbsp;</td><td class="cl">Archbishop</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Barony</th><td class="u">&nbsp;</td><td class="cl">Bishop</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="bu">Lord Warden</td><td class="u">&nbsp;</td><td class="pe">Bailiff</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="ge">Lord</td><td class="co">Chancellor</td><td class="mo">Abbot</td><td class="u">&nbsp;</td><td class="co">Chamberlain</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="na">Admiral</td><td class="cl">Priest</td><td class="mo">Provost</td><td class="cr">House Commander</td><td class="co">Constable</td><td class="bu">Lord Mayor</td><td class="pu">Hostler</td><td class="pe">Reeve</td>
</tr>
<tr>
<th class="l">Tenant Paravail</th><th colspan="8" class="c">Landed Gentry</th>
</tr>
<tr>
<th class="ma">Tithing</th><td class="ge">Knight</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="cr">Crusader Knight</td><td class="ge">Sergeant-at-Arms</td><td class="bu">Patrician</td><td class="u">&nbsp;</td><td class="pe">Hufner</td>
</tr>
<tr>
<th class="ma">Tithing</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Treasurer</td><td class="co">Butler</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Falconer</td>
</tr>
<tr>
<th class="ma">Tithing</th><td class="u">&nbsp;</td><td class="cl">Chaplain</td><td class="mo">Prior</td><td class="co">Draper</td><td class="co">Panter</td><td class="u">&nbsp;</td><td class="pu">Innkeeper</td><td class="co">Gamekeeper</td>
</tr>
<tr>
<th class="ma">Hide</th><td class="ge">Squire</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="cr">Crusader Sergeant</td><td class="co">Knave</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Hide</th><td class="u">&nbsp;</td><td class="cl">Vicar</td><td class="mo">Monk</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="bu">Burgher</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Hide</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="he">Friar</td><td class="he">Crusader Brother</td><td class="co">Valet</td><td class="bu">Miller</td><td class="pu">Publican</td><td class="pe">Cottar</td>
</tr>
<tr>
<th class="ma">Virgate</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="se">Serf</td>
</tr>
</tbody>
<thead>
<tr><th class="ma">Feudal Division</th><th class="ma">Gentry</th><th class="ma">Clergy</th><th class="ma">Monastic</th><th class="ma">Crusader</th><th class="ma">Courtier</th><th class="ma">Burgher</th><th class="ma">Commerce</th><th class="ma">Peasantry</th></tr>
</thead>
</table>
</div>

<div class="py-3">
<h3>Feudal Ranks (Greek Orthodox)</h3>
<img src="{{ asset('img/images/belief_orthodox.png') }}" width="30" height="30" alt="belief">
<table class="tablesorter table">
<thead>
<tr><th class="ma">Feudal Division</th><th class="ma">Gentry</th><th class="ma">Clergy</th><th class="ma">Monastic</th><th class="ma">Crusader</th><th class="ma">Courtier</th><th class="ma">Burgher</th><th class="ma">Commerce</th><th class="ma">Peasantry</th></tr>
</thead>
<tbody>
<tr>
<th class="l">Lord Paramount</th><th colspan="8" class="c">Sovereign</th>
</tr>
<tr>
<th class="ma">Kingdom</th><td class="ge">Basileus</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Grand Duchy</th><td class="ge">Despot</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Grand Duchy</th><td class="na">Megas Doux</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Tenant-in-Chief</th><th colspan="8" class="c">Non-Sovereign</th>
</tr>
<tr>
<th class="ma">Duchy</th><td class="ge">Doux</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">March</th><td class="ge">Tourmarch</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">County</th><td class="ge">Comes</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="ge">Katepano</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">County</th><td class="ge">Droungarios</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Castellany</th><td class="ca">Kentarchos</td><td class="cl">Patriarch</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="ge">Logachos</td><td class="bu">Quaestor</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Castellany</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Skouterios</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Mesne Lord</th><th colspan="8" class="c">Court Baron</th>
</tr>
<tr>
<th class="ma">Barony</th><td class="u">&nbsp;</td><td class="cl">Archbishop</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Barony</th><td class="ge">Dekarchos</td><td class="cl">Bishop</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="ge">Kephale</td><td class="bu">Sakellarios</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="u">&nbsp;</td><td class="cl">Priest</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Koubikoularios</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="ge">Logothetes</td><td class="u">&nbsp;</td><td class="mo">Archimandrite</td><td class="u">&nbsp;</td><td class="ge">Domestikos</td><td class="bu">Horeiarios</td><td class="pu">Hostler</td><td class="pe">Kourator</td>
</tr>
<tr>
<th class="l">Tenant Paravail</th><th colspan="8" class="c">Landed Gentry</th>
</tr>
<tr>
<th class="ma">Tithing</th><td class="ge">Kathaphraktos</td><td class="u">&nbsp;</td><td class="mo">Hegumen</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="bu">Patrikios</td><td class="u">&nbsp;</td><td class="pe">Boidatos</td>
</tr>
<tr>
<th class="ma">Tithing</th><td class="u">&nbsp;</td><td class="cl">Chaplain</td><td class="co">Oikononomos</td><td class="u">&nbsp;</td><td class="co">Varangian</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Falconer</td>
</tr>
<tr>
<th class="ma">Tithing</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="ge">Spatharios</td><td class="u">&nbsp;</td><td class="pu">Innkeeper</td><td class="co">Gamekeeper</td>
</tr>
<tr>
<th class="ma">Hide</th><td class="ge">Kavallarios</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Knave</td><td class="bu">Burgher</td><td class="u">&nbsp;</td><td class="pe">Paroikos</td>
</tr>
<tr>
<th class="ma">Hide</th><td class="u">&nbsp;</td><td class="cl">Acolyte</td><td class="mo">Monk</td><td class="u">&nbsp;</td><td class="co">Valet</td><td class="bu">Miller</td><td class="pu">Publican</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Virgate</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="se">Serf</td>
</tr>
</tbody>
<thead>
<tr><th class="ma">Feudal Division</th><th class="ma">Gentry</th><th class="ma">Clergy</th><th class="ma">Monastic</th><th class="ma">Crusader</th><th class="ma">Courtier</th><th class="ma">Burgher</th><th class="ma">Commerce</th><th class="ma">Peasantry</th></tr>
</thead>
</table>
</div>

<div class="py-3">
<h3>Feudal Ranks (Russian Orthodox)</h3>
<img src="{{ asset('img/images/belief_orthodox.png') }}" width="30" height="30" alt="belief">
<table class="tablesorter table">
<thead>
<tr><th class="ma">Feudal Division</th><th class="ma">Gentry</th><th class="ma">Clergy</th><th class="ma">Monastic</th><th class="ma">Crusader</th><th class="ma">Courtier</th><th class="ma">Burgher</th><th class="ma">Commerce</th><th class="ma">Peasantry</th></tr>
</thead>
<tbody>
<tr>
<th class="l">Lord Paramount</th><th colspan="8" class="c">Sovereign</th>
</tr>
<tr>
<th class="ma">Kingdom</th><td class="ge">Tsar</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Grand Duchy</th><td class="ge">Veliki Knyaz</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Tenant-in-Chief</th><th colspan="8" class="c">Non-Sovereign</th>
</tr>
<tr>
<th class="ma">Duchy</th><td class="ge">Knyaz</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">March</th><td class="co">Voivode</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">County</th><td class="ge">Count</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="bu">Tysyatsky</td><td class="u">&nbsp;</td><td class="pe">Sheriff</td>
</tr>
<tr>
<th class="ma">Castellany</th><td class="ca">Castellan</td><td class="cl">Patriarch</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="bu">Namestnik</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Mesne Lord</th><th colspan="8" class="c">Court Baron</th>
</tr>
<tr>
<th class="ma">Barony</th><td class="ge">Boyar</td><td class="cl">Archbishop</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Barony</th><td class="u">&nbsp;</td><td class="cl">Bishop</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="bu">Kontsy</td><td class="u">&nbsp;</td><td class="pe">Bailiff</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="ge">Gospodar</td><td class="co">Chancellor</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Chamberlain</td><td class="bu">Posadnik</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="na">Admiral</td><td class="cl">Priest</td><td class="mo">Archimandrite</td><td class="u">&nbsp;</td><td class="co">Constable</td><td class="u">&nbsp;</td><td class="pu">Hostler</td><td class="pe">Reeve</td>
</tr>
<tr>
<th class="l">Tenant Paravail</th><th colspan="8" class="c">Landed Gentry</th>
</tr>
<tr>
<th class="ma">Tithing</th><td class="ge">Knight</td><td class="u">&nbsp;</td><td class="mo">Hegumen</td><td class="u">&nbsp;</td><td class="ge">Varangian</td><td class="bu">Patrician</td><td class="u">&nbsp;</td><td class="pe">Hufner</td>
</tr>
<tr>
<th class="ma">Tithing</th><td class="u">&nbsp;</td><td class="cl">Chaplain</td><td class="mo">Oikononomos</td><td class="u">&nbsp;</td><td class="co">Butler</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Falconer</td>
</tr>
<tr>
<th class="ma">Tithing</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Panter</td><td class="u">&nbsp;</td><td class="pu">Innkeeper</td><td class="co">Gamekeeper</td>
</tr>
<tr>
<th class="ma">Hide</th><td class="ge">Squire</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="ge">Huskarl</td><td class="bu">Burgher</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Hide</th><td class="u">&nbsp;</td><td class="bl">Acolyte</td><td class="bl">Monk</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="bu">Miller</td><td class="pu">Publican</td><td class="pe">Cottar</td>
</tr>
<tr>
<th class="ma">Virgate</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="se">Smerd</td>
</tr>
</tbody>
<thead>
<tr><th class="ma">Feudal Division</th><th class="ma">Gentry</th><th class="ma">Clergy</th><th class="ma">Monastic</th><th class="ma">Crusader</th><th class="ma">Courtier</th><th class="ma">Burgher</th><th class="ma">Commerce</th><th class="ma">Peasantry</th></tr>
</thead>
</table>
</div>

<div class="py-3">
<h3>Feudal Ranks (Serbian Orthodox)</h3>
<img src="{{ asset('img/images/belief_orthodox.png') }}" width="30" height="30" alt="belief">
<table class="tablesorter table">
<thead>
<tr><th class="ma">Feudal Division</th><th class="ma">Gentry</th><th class="ma">Clergy</th><th class="ma">Monastic</th><th class="ma">Crusader</th><th class="ma">Courtier</th><th class="ma">Burgher</th><th class="ma">Commerce</th><th class="ma">Peasantry</th></tr>
</thead>
<tbody>
<tr>
<th class="l">Lord Paramount</th><th colspan="8" class="c">Sovereign</th>
</tr>
<tr>
<th class="ma">Kingdom</th><td class="ge">Tsar</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Grand Duchy</th><td class="ge">Veliki Knyaz</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Tenant-in-Chief</th><th colspan="8" class="c">Non-Sovereign</th>
</tr>
<tr>
<th class="ma">Duchy</th><td class="ge">Knyaz</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">March</th><td class="co">Voivode</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">March</th><td class="ge">Ban</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">County</th><td class="ge">Count</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="pe">Sheriff</td>
</tr>
<tr>
<th class="ma">Castellany</th><td class="ca">Castellan</td><td class="cl">Patriarch</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="bu">Gross Schenker</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Mesne Lord</th><th colspan="8" class="c">Court Baron</th>
</tr>
<tr>
<th class="ma">Barony</th><td class="ge">Boyar</td><td class="cl">Archbishop</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Barony</th><td class="u">&nbsp;</td><td class="cl">Bishop</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="pe">Bailiff</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="ge">Gospodar</td><td class="co">Chancellor</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Chamberlain</td><td class="bu">Lord Mayor</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="na">Admiral</td><td class="cl">Priest</td><td class="mo">Archimandrite</td><td class="u">&nbsp;</td><td class="co">Constable</td><td class="u">&nbsp;</td><td class="pu">Hostler</td><td class="pe">Reeve</td>
</tr>
<tr>
<th class="l">Tenant Paravail</th><th colspan="8" class="c">Landed Gentry</th>
</tr>
<tr>
<th class="ma">Tithing</th><td class="ge">Knight</td><td class="u">&nbsp;</td><td class="mo">Hegumen</td><td class="u">&nbsp;</td><td class="ge">Sergeant-at-Arms</td><td class="bu">Patrician</td><td class="u">&nbsp;</td><td class="pe">Hufner</td>
</tr>
<tr>
<th class="ma">Tithing</th><td class="u">&nbsp;</td><td class="cl">Chaplain</td><td class="co">Oikononomos</td><td class="u">&nbsp;</td><td class="co">Butler</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Falconer</td>
</tr>
<tr>
<th class="ma">Tithing</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Panter</td><td class="u">&nbsp;</td><td class="pu">Innkeeper</td><td class="co">Gamekeeper</td>
</tr>
<tr>
<th class="ma">Hide</th><td class="ge">Squire</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Knave</td><td class="bu">Burgher</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Hide</th><td class="u">&nbsp;</td><td class="cl">Acolyte</td><td class="mo">Monk</td><td class="u">&nbsp;</td><td class="co">Valet</td><td class="bu">Miller</td><td class="pu">Publican</td><td class="pe">Cottar</td>
</tr>
<tr>
<th class="ma">Virgate</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="se">Smerd</td>
</tr>
</tbody>
<thead>
<tr><th class="ma">Feudal Division</th><th class="ma">Gentry</th><th class="ma">Clergy</th><th class="ma">Monastic</th><th class="ma">Crusader</th><th class="ma">Courtier</th><th class="ma">Burgher</th><th class="ma">Commerce</th><th class="ma">Peasantry</th></tr>
</thead>
</table>
</div>

<div class="py-3">
<h3>Feudal Ranks (Islam)</h3>
<img src="{{ asset('img/images/belief_islam.png') }}" width="30" height="30" alt="belief">
<table class="tablesorter table">
<thead>
<tr><th class="ma">Feudal Division</th><th class="ma">Gentry</th><th class="ma">Clergy</th><th class="ma">Monastic</th><th class="ma">Crusader</th><th class="ma">Courtier</th><th class="ma">Burgher</th><th class="ma">Commerce</th><th class="ma">Peasantry</th></tr>
</thead>
<tbody>
<tr>
<th class="l">Lord Paramount</th><th colspan="8" class="c">Sovereign</th>
</tr>
<tr>
<th class="ma">Kingdom</th><td class="ge">Malik</td><td class="cl">Caliph</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="co">Sultan</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Grand Duchy</th><td class="co">Grand Vizier</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Tenant-in-Chief</th><th colspan="8" class="c">Non-Sovereign</th>
</tr>
<tr>
<th class="ma">Duchy</th><td class="ge">Emir</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">March</th><td class="co">Hakim</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">County</th><td class="ge">Sheikh</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Castellany</th><td class="ca">Ustadar</td><td class="ju">Qadi</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="bu">Murabit</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Mesne Lord</th><th colspan="8" class="c">Court Baron</th>
</tr>
<tr>
<th class="ma">Barony</th><td class="ge">Wali</td><td class="ju">Mufti</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Barony</th><td class="ge">Saghir</td><td class="ju">Mufassir</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="bu">Mohtaseb</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="co">Vizier</td><td class="cl">Imam</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="bu">Khazindar</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="ge">Sharif</td><td class="u">&nbsp;</td><td class="mo">Murshid</td><td class="u">&nbsp;</td><td class="ge">Hajib</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="na">Admiral</td><td class="u">&nbsp;</td><td class="mo">Khawaja</td><td class="u">&nbsp;</td><td class="co">Mushrif</td><td class="u">&nbsp;</td><td class="pu">Hostler</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Tenant Paravail</th><th colspan="8" class="c">Landed Gentry</th>
</tr>
<tr>
<th class="ma">Tithing</th><td class="ge">Faris</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="ge">Sahib</td><td class="bu">Patrician</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Tithing</th><td class="u">&nbsp;</td><td class="ju">Faqih</td><td class="mo">Faqir</td><td class="u">&nbsp;</td><td class="co">Jomdar</td><td class="u">&nbsp;</td><td class="pu">Innkeeper</td><td class="co">Alsiqar</td>
</tr>
<tr>
<th class="ma">Hide</th><td class="cr">Ghazi</td><td class="ju">Alim</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="bu">Burgher</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Hide</th><td class="u">&nbsp;</td><td class="cl">Mullah</td><td class="mo">Dervish</td><td class="u">&nbsp;</td><td class="co">Qatib</td><td class="bu">Miller</td><td class="pu">Shopkeeper</td><td class="pe">Bedouin</td>
</tr>
<tr>
<th class="ma">Virgate</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="u">&nbsp;</td><td class="se">Ghilam</td>
</tr>
</tbody>
<thead>
<tr><th class="ma">Feudal Division</th><th class="ma">Gentry</th><th class="ma">Clergy</th><th class="ma">Monastic</th><th class="ma">Crusader</th><th class="ma">Courtier</th><th class="ma">Burgher</th><th class="ma">Commerce</th><th class="ma">Peasantry</th></tr>
</thead>
</table>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="insignia">Feudal Insignia</a></h2>

<div class="py-3">
<h3>Feudal Insignia (Catholic - Feudal)</h3>
<img src="{{ asset('img/images/misc_lion.png') }}" width="40" height="40" alt="misc">
<table class="tablesorter table">
<thead>
<tr><th class="ma">Territory</th><th class="ma">Helm</th><th class="ma">Escutcheon</th><th class="ma">Coronet</th><th class="ma">Orb</th></tr>
</thead>
<tbody>
<tr>
<th class="l">Lord Paramount</th><th colspan="4" class="c">Sovereign</th>
</tr>
<tr>
<th class="ma">Kingdom</th><td class="b"><img src="{{ asset('img/images/helm_barred.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_king.png') }}" width="39" height="30" alt="coronet"></td><td class="b"><img src="{{ asset('img/images/globus_cruciger.png') }}" width="20" height="30" alt="orb"></td>
</tr>
<tr>
<th class="ma">Grand Duchy</th><td class="b"><img src="{{ asset('img/images/helm_barred.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_king.png') }}" width="39" height="30" alt="coronet"></td><td class="b"><img src="{{ asset('img/images/globus_cruciger.png') }}" width="20" height="30" alt="orb"></td>
</tr>
<tr>
<th class="l">Tenant-in-Chief</th><th colspan="4" class="c">Non-Sovereign</th>
</tr>
<tr>
<th class="ma">Duchy</th><td class="b"><img src="{{ asset('img/images/helm_barred.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_duke.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">March</th><td class="b"><img src="{{ asset('img/images/helm_barred.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_marquis.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">County</th><td class="b"><img src="{{ asset('img/images/helm_barred.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_count.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Castellany</th><td class="b"><img src="{{ asset('img/images/helm_barred.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_viscount.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Mesne Lord</th><th colspan="4" class="c">Court Baron</th>
</tr>
<tr>
<th class="ma">Barony</th><td class="b"><img src="{{ asset('img/images/helm_barred.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_baron.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="b"><img src="{{ asset('img/images/helm_barred.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_lord.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Tenant Paravail</th><th colspan="4" class="c">Landed Gentry</th>
</tr>
<tr>
<th class="ma">Tithing</th><td class="b"><img src="{{ asset('img/images/helm_closed.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_knight.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Hide</th><td class="b"><img src="{{ asset('img/images/helm_closed.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_knight.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
</tbody>
<thead>
<tr><th class="ma">Territory</th><th class="ma">Helm</th><th class="ma">Escutcheon</th><th class="ma">Coronet</th><th class="ma">Orb</th></tr>
</thead>
</table>
</div>

<div class="py-3">
<h3>Feudal Insignia (Catholic - Eclessiastical)</h3>
<img src="{{ asset('img/images/misc_mitre.png') }}" width="40" height="40" alt="misc">
<table class="tablesorter table">
<thead>
<tr><th class="ma">Territory</th><th class="ma">Rank</th><th class="ma">Escutcheon</th><th class="ma">Coronet</th><th class="ma">Galero</th><th class="ma">Mitre</th><th class="ma">Orb</th></tr>
</thead>
<tbody>
<tr>
<th class="l">Lord Paramount</th><th colspan="6" class="c">Sovereign</th>
</tr>
<tr>
<th class="ma">Kingdom</th><td class="cl">Pope</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_pope.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td><td class="b"><img src="{{ asset('img/images/mitre.png') }}" width="39" height="30" alt="mitre"></td><td class="b"><img src="{{ asset('img/images/globus_cruciger.png') }}" width="20" height="30" alt="orb"></td>
</tr>
<tr>
<th class="l">Tenant-in-Chief</th><th colspan="6" class="c">Non-Sovereign</th>
</tr>
<tr>
<th class="ma">Duchy</th><td class="cl">Prince-Archbishop</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_prince.png') }}" width="39" height="30" alt="coronet"></td><td class="b"><img src="{{ asset('img/images/galero_archbishop.png') }}" width="39" height="30" alt="galero"></td><td class="b"><img src="{{ asset('img/images/mitre.png') }}" width="39" height="30" alt="mitre"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">County</th><td class="cl">Prince-Bishop</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_prince.png') }}" width="39" height="30" alt="coronet"></td><td class="b"><img src="{{ asset('img/images/galero_bishop.png') }}" width="39" height="30" alt="galero"></td><td class="b"><img src="{{ asset('img/images/mitre.png') }}" width="39" height="30" alt="mitre"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">County</th><td class="mo">Prince-Abbot</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_prince.png') }}" width="39" height="30" alt="coronet"></td><td class="b"><img src="{{ asset('img/images/galero_abbot.png') }}" width="39" height="30" alt="galero"></td><td class="b"><img src="{{ asset('img/images/mitre.png') }}" width="39" height="30" alt="mitre"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Castellany</th><td class="mo">Prince-Provost</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_prince.png') }}" width="39" height="30" alt="coronet"></td><td class="b"><img src="{{ asset('img/images/galero_abbot.png') }}" width="39" height="30" alt="galero"></td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Mesne Lord</th><th colspan="6" class="c">Court Baron</th>
</tr>
<tr>
<th class="ma">Barony</th><td class="cl">Cardinal</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="u">&nbsp;</td><td class="b"><img src="{{ asset('img/images/galero_cardinal.png') }}" width="39" height="30" alt="galero"></td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Barony</th><td class="cl">Archbishop</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="u">&nbsp;</td><td class="b"><img src="{{ asset('img/images/galero_archbishop.png') }}" width="39" height="30" alt="galero"></td><td class="b"><img src="{{ asset('img/images/mitre.png') }}" width="39" height="30" alt="mitre"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Barony</th><td class="cl">Bishop</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="u">&nbsp;</td><td class="b"><img src="{{ asset('img/images/galero_bishop.png') }}" width="39" height="30" alt="galero"></td><td class="b"><img src="{{ asset('img/images/mitre.png') }}" width="39" height="30" alt="mitre"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="mo">Abbot</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="u">&nbsp;</td><td class="b"><img src="{{ asset('img/images/galero_abbot.png') }}" width="39" height="30" alt="galero"></td><td class="b"><img src="{{ asset('img/images/mitre.png') }}" width="39" height="30" alt="mitre"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="mo">Provost</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="u">&nbsp;</td><td class="b"><img src="{{ asset('img/images/galero_abbot.png') }}" width="39" height="30" alt="galero"></td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="cl">Chancellor</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="u">&nbsp;</td><td class="b"><img src="{{ asset('img/images/galero_priest.png') }}" width="39" height="30" alt="galero"></td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="cl">Priest</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="u">&nbsp;</td><td class="b"><img src="{{ asset('img/images/galero_priest.png') }}" width="39" height="30" alt="galero"></td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="mo">Prior</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="u">&nbsp;</td><td class="b"><img src="{{ asset('img/images/galero_prior.png') }}" width="39" height="30" alt="galero"></td><td class="u">&nbsp;</td><td class="u">&nbsp;</td>
</tr>
</tbody>
<thead>
<tr><th class="ma">Territory</th><th class="ma">Rank</th><th class="ma">Escutcheon</th><th class="ma">Coronet</th><th class="ma">Galero</th><th class="ma">Mitre</th><th class="ma">Orb</th></tr>
</thead>
</table>
</div>

<div class="py-3">
<h3>Feudal Insignia (Catholic - Burgher)</h3>
<img src="{{ asset('img/images/misc_anchor.png') }}" width="40" height="40" alt="misc">
<table class="tablesorter table">
<thead>
<tr><th class="ma">Territory</th><th class="ma">Helm</th><th class="ma">Escutcheon</th><th class="ma">Coronet</th></tr>
</thead>
<tbody>
<tr>
<th class="l">Lord Paramount</th><th colspan="6" class="c">Sovereign</th>
</tr>
<tr>
<th class="ma">Grand Duchy</th><td class="b"><img src="{{ asset('img/images/helm_closed.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_doge.png') }}" width="39" height="30" alt="coronet"></td>
</tr>
<tr>
<th class="l">Tenant-in-Chief</th><th colspan="6" class="c">Non-Sovereign</th>
</tr>
<tr>
<th class="ma">March</th><td class="b"><img src="{{ asset('img/images/helm_closed.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_marquis.png') }}" width="39" height="30" alt="coronet"></td>
</tr>
<tr>
<th class="ma">County</th><td class="b"><img src="{{ asset('img/images/helm_closed.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_count.png') }}" width="39" height="30" alt="coronet"></td>
</tr>
<tr>
<th class="ma">Castellany</th><td class="b"><img src="{{ asset('img/images/helm_closed.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_viscount.png') }}" width="39" height="30" alt="coronet"></td>
</tr>
<tr>
<th class="l">Mesne Lord</th><th colspan="8" class="c">Court Baron</th>
</tr>
<tr>
<th class="ma">Barony</th><td class="b"><img src="{{ asset('img/images/helm_closed.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_baron.png') }}" width="39" height="30" alt="coronet"></td>
</tr>
<tr>
<th class="ma">Parish</th><td class="b"><img src="{{ asset('img/images/helm_closed.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_lord.png') }}" width="39" height="30" alt="coronet"></td>
</tr>
<tr>
<th class="l">Tenant Paravail</th><th colspan="8" class="c">Landed Gentry</th>
</tr>
<tr>
<th class="ma">Tithing</th><td class="b"><img src="{{ asset('img/images/helm_closed.png') }}" width="39" height="30" alt="helm"></td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_knight.png') }}" width="39" height="30" alt="coronet"></td>
</tr>
</tbody>
<thead>
<tr><th class="ma">Territory</th><th class="ma">Helm</th><th class="ma">Escutcheon</th><th class="ma">Coronet</th></tr>
</thead>
</table>
</div>

<div class="py-3">
<h3>Feudal Insignia (Orthodox - Temporal)</h3>
<img src="{{ asset('img/images/misc_crown.png') }}" width="40" height="40" alt="misc">
<table class="tablesorter table">
<thead>
<tr><th class="ma">Territory</th><th class="ma">Escutcheon</th><th class="ma">Monomakh</th><th class="ma">Orb</th></tr>
</thead>
<tbody>
<tr>
<th class="l">Lord Paramount</th><th colspan="3" class="c">Sovereign</th>
</tr>
<tr>
<th class="ma">Kingdom</th><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_tsar.png') }}" width="39" height="30" alt="coronet"></td><td class="b"><img src="{{ asset('img/images/globus_cruciger.png') }}" width="20" height="30" alt="orb"></td>
</tr>
<tr>
<th class="ma">Grand Duchy</th><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_grand_prince.png') }}" width="39" height="30" alt="coronet"></td><td class="b"><img src="{{ asset('img/images/globus_cruciger.png') }}" width="20" height="30" alt="orb"></td>
</tr>
<tr>
<th class="l">Tenant-in-Chief</th><th colspan="3" class="c">Non-Sovereign</th>
</tr>
<tr>
<th class="ma">Duchy</th><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_noble.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">March</th><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_noble.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">County</th><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_noble.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Castellany</th><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_noble.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Mesne Lord</th><th colspan="3" class="c">Court Baron</th>
</tr>
<tr>
<th class="ma">Barony</th><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_noble.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_noble.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="l">Tenant Paravail</th><th colspan="3" class="c">Landed Gentry</th>
</tr>
<tr>
<th class="ma">Tithing</th><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_hero.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Hide</th><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/coronet_hero.png') }}" width="39" height="30" alt="coronet"></td><td class="u">&nbsp;</td>
</tr>
</tbody>
<thead>
<tr><th class="ma">Territory</th><th class="ma">Escutcheon</th><th class="ma">Monomakh</th><th class="ma">Orb</th></tr>
</thead>
</table>
</div>

<div class="py-3">
<h3>Feudal Insignia (Orthodox - Eclessiastical)</h3>
<img src="{{ asset('img/images/misc_mitre.png') }}" width="40" height="40" alt="misc">
<table class="tablesorter table">
<thead>
<tr><th class="ma">Territory</th><th class="ma">Rank</th><th class="ma">Escutcheon</th><th class="ma">Galero</th><th class="ma">Mitre</th></tr>
</thead>
<tbody>
<tr>
<th class="l">Tenant-in-Chief</th><th colspan="5" class="c">Non-Sovereign</th>
</tr>
<tr>
<th class="ma">Castellany</th><td class="cl">Patriarch</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/galero_archbishop.png') }}" width="39" height="30" alt="galero"></td><td class="b"><img src="{{ asset('img/images/mitre.png') }}" width="39" height="30" alt="mitre"></td>
</tr>
<tr>
<th class="l">Mesne Lord</th><th colspan="5" class="c">Court Baron</th>
</tr>
<tr>
<th class="ma">Barony</th><td class="cl">Archbishop</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/galero_archbishop.png') }}" width="39" height="30" alt="galero"></td><td class="b"><img src="{{ asset('img/images/mitre.png') }}" width="39" height="30" alt="mitre"></td>
</tr>
<tr>
<th class="ma">Barony</th><td class="cl">Bishop</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/galero_bishop.png') }}" width="39" height="30" alt="galero"></td><td class="b"><img src="{{ asset('img/images/mitre.png') }}" width="39" height="30" alt="mitre"></td>
</tr>
<tr>
<th class="ma">Parish</th><td class="cl">Chancellor</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/galero_priest.png') }}" width="39" height="30" alt="galero"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="cl">Priest</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/galero_priest.png') }}" width="39" height="30" alt="galero"></td><td class="u">&nbsp;</td>
</tr>
<tr>
<th class="ma">Parish</th><td class="mo">Archimandrite</td><td class="b"><img src="{{ asset('img/images/coat_of_arms.png') }}" width="30" height="30" alt="coat of arms"></td><td class="b"><img src="{{ asset('img/images/galero_prior.png') }}" width="39" height="30" alt="galero"></td><td class="u">&nbsp;</td>
</tr>
</tbody>
<thead>
<tr><th class="ma">Territory</th><th class="ma">Rank</th><th class="ma">Escutcheon</th><th class="ma">Galero</th><th class="ma">Mitre</th></tr>
</thead>
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