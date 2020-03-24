@extends('layouts.manual')
@section('title')
Manual
@endsection
@section('content')

					<h1>Feudalism</h1>

<div class="py-5 border-top">
<H2 class="m"><a name="units">Units of Land</a></H2>

<div class="py-3">
<H3>Territorial Subdivisions</H3>
<P>There are several kinds of land divisions and subdivisions, such as a:</P>
<table class="tablesorter table">
<thead>
<tr><th class="ma">Territory</th><th class="ma">Feudal Rank</th><th class="ma">Rule Rank</th></tr>
</thead>
<tbody>
<tr>
<td class="b">Kingdom</td><td class="b">Lord Paramount</td><td class="b">Sovereign</td>
</tr>
<tr>
<td class="b">Grand Duchy</td><td class="b">Lord Paramount</td><td class="b">Sovereign</td>
</tr>
<tr>
<td class="b">Duchy</td><td class="b">Tenant-in-Chief</td><td class="b">Non-Sovereign</td>
</tr>
<tr>
<td class="b">March</td><td class="b">Tenant-in-Chief</td><td class="b">Non-Sovereign</td>
</tr>
<tr>
<td class="b">County</td><td class="b">Tenant-in-Chief</td><td class="b">Non-Sovereign</td>
</tr>
<tr>
<td class="b">Castellany</td><td class="b">Tenant-in-Chief</td><td class="b">Non-Sovereign</td>
</tr>
<tr>
<td class="b">Barony</td><td class="b">Mesne Lord</td><td class="b">Court Baron</td>
</tr>
<tr>
<td class="b">Parish</td><td class="b">Mesne Lord</td><td class="b">Court Baron</td>
</tr>
<tr>
<td class="b">Tithing</td><td class="b">Tenant Paravail</td><td class="b">Landed Gentry</td>
</tr>
<tr>
<td class="b">Hide</td><td class="b">Tenant Paravail</td><td class="b">Landed Gentry</td>
</tr>
<tr>
<td class="b">Virgate</td><td class="b">Tenant Paravail</td><td class="b">Landed Gentry</td>
</tr>
</tbody>
</table>
</div>

<div class="py-3">
<H3>Virgate</H3>
<p>The <I>virgate</I> is the smallest unit of land. A virgate is &frac14; of a hide. A <I>virgate</I> is the exact amount of land that can be worked by a serf in one annual season. Thus a maximum of 4 settlers can occupy a hide of land.</p>
</div>

<div class="py-3">
<H3>Hide</H3>
<p>The <I>hide</I> is a unit of land. It is equal to 1 grid or 1 plot of land on the map. It is the minimum amount of land required to sustain a feudal title of a tenant paravail.</p>
</div>

<div class="py-3">
<H3>Tithing</H3>
<p>A <I>tithing</I> is a unit of land that is equal to 10 <I>hides</I>. It is the minimum amount of land required to sustain a feudal title of a tenant paravail and to have a coat of arms and to have a vassal.</p>
</div>

<div class="py-3">
<H3>Wapentake</H3>
<p>A <I>wapentake</I> is a unit of land that is equal to 100 <I>hides</I>.</p>
</div>

</div>

<div class="py-5 border-top">
<H2 class="m"><a name="divisions">Territorial Divisions</a></H2>

<div class="py-3">
<H3>Bailiwick</H3>
<P>The minimum size of a <i>bailiwick</i> is at least 1 <I>tithing</I> and a bailiwick must contain at least 1 <i>vill</i> with a <i>court baron</i>.</P>
</div>

<div class="py-3">
<H3>Vill</H3>
<p>A <i>vill</i> is a land unit that contains a settlement. This vill can either be a village or a borough. A vill can be a borough, if it has at least 600 inhabitants and a town wall. If a vill does not meet the requirement of a borough, then the vill becomes a <i>village</i>.</p>


<table class="tablesorter table">
<thead>
<tr><th class="ma">Settlement Category</th><th class="ma">Minimum Population</th></tr>
</thead>
<tbody>
<tr><td>Metropolis</td><td class="r">10000</td></tr>
<tr><td>City</td><td class="r">2000</td></tr>
<tr><td>Town</td><td class="r">600</td></tr>
<tr><td>Village</td><td class="r">120</td></tr>
<tr><td>Hamlet</td><td class="r">60</td></tr>
<tr><td>Farmstead</td><td class="r">20</td></tr>
</tbody>
</table>

<p>A <i>vill</i> within a <i>bailiwick</i> can be a:</p> 
<ul>
<li>ward</li>
<li>burgage</li>
<li>stift</li>
<li>minster</li>
</ul>
<p>The exact type depends on the overlord.</p>

<p>There can be several vills within a <i>bailiwick</i>. A <i>vill</i> containing a court baron makes the overlord at least a <i>Mesne Lord</i>.</p>

<p>A borough always has a <i>Lord Mayor</i>. Thus a borough that is also a ward, a stift, or a minster, has two overlords.</p>
</div>

<div class="py-3">
<H3>Manor</H3>

<p>A manor encompasses all the hides within a <i>bailiwick</i> that belong to 1 <i>vill</i>.</p>

<p>If the lord of the manor of a capital <i>vill</i> within a <i>bailiwick</i> has the feudal rank of <i>Mesne Lord</i> and has a vassal as a <i>tenant paravail</i>, then the manor is a barony, else it is a parish.</p>

</div>

<div class="py-3">
<H3>County</H3>
<p>A county size varies, but a county must contain at least 1 <i>vill</i> with a <i>court baron</i> of at least the level of <i>county court</i> and its overlord must have the feudal rank of <i>Tenant-in-chief</i>.</p>

<p>The overlord of a county has the title of Burgrave or equivalent, if the county contains 1 <i>barony</i> and the capital <i>vill</i> of a county is either a <i>ward</i> or a <i>borough</i> or distuingished as a <i>burgraviate</i>.</p>

<p>The overlord of a county has the title of Count or equivalent, if the county contains 1 <i>barony</i>.</p>

<p>The overlord of a county has the title of Marquis or equivalent, if the county contains 1 <i>barony</i> and is bordered to another realm or distuingished as a <i>march</i>.</p>

<p>The overlord of a county has the title of Duke or equivalent, if the county contains 1 <i>barony</i> and is at least the size of a <i>wapentake</i>.</p>
</div>

<div class="py-3">
<H3>Diocese</H3>

<p>A <i>bailiwick</i> that has a stift, can have a cathedral. This cathedral can be placed in a stift.</p>

<p>A bishop or archbishop cannot be <i>Tenant Paravail</i>.</p>

<p>If the cathedral is placed in the capital of a <i>county</i> and this capital is a <i>stift</i>, then a Bishop is styled Prince-Bishop, or in case of an Archbishop gains the title Prince-Archbishop.</p>

<table class="tablesorter table">
<thead>
<tr><th class="ma">Feudal Rank</th><th class="ma">Bishop</th><th class="ma">Archbishop</th></tr>
</thead>
<tbody>
<tr><th class="ma">Lord Paramount</th><td class="u">&nbsp;</td><td class="cl">Prince-Archbishop</td></tr>
<tr><th class="ma">Tenant-in-chief</th><td class="cl">Prince-Bishop</td><td class="cl">Prince-Archbishop</td></tr>
<tr><th class="ma">Mesne Lord</th><td class="cl">Bishop</td><td class="cl">Archbishop</td></tr>
<tr><th class="ma">Tenant Paravail</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
</tbody>
</table>

<p>The archbishop ranks above the bishop. Some archbishops and bishops are cardinal bishops. These cardinals can elect a pope.</p>
</div>

<div class="py-3">
<H3>Realm &amp; Orders</H3>

<p>All divisions are part of a realm. At the head of a realm is a <i>sovereign</i>. The title of a sovereign varies according to the order and precedence.</p>

<p><b>Crusader</b>
<br>Grandmaster is the title for the ruler of a crusader order.</p>

<p><b>Burgher</b>
<br>The sovereign of a maritime republic has the title of Doge or Rector.</p>

<p><b>Clergy</b>
<br>The Pope is the head of the Catholic church, while the Patriarch is the head of an Orthodox church.</p>

<p><b>Nobility</b>
<br>A <i>King</i> is often the monarch of a nobility order.</p>
<p>The <i>Grand Duke</i> is the lesser monarch of federalised union, where two realms are held by the same dynasty not yet consolidated. An Archduke on the other hand is a monarch that has a <i>demesne</i> at least the size of <i>Duke</i>, whose landed estates are both outside and inside an empire.</p>
</div>

</div>

<div class="py-5 border-top">
<h2 class="m"><a name="ranks">Feudal Ranks</a></h2>

<div class="py-3">
<P>A landlord is a person who owns a unit of land. A person who rents the land is known as a tenant. If a tenant pays homage to a landlord, then this tenant is known as a vassal to that landlord. Likewise the landlord who leases the land to a tenant is known as a liege to that tenant.</P>
<P>A landlord may only lease land to a tenant who is of a lower social class than himself. Likewise a tenant may only rent land from a landlord who is of higher social class than himself. This process where a vassal rents land from a liege is known as vassalization. In this process the inferior tenant pays homage to his superior landlord, while the landlord gives away a portion of his land to the tenant in exchange for rent.</P>
<P>Land where the owner of the land also holds the land under direct control is known as <I>allodial land</I>. The land that is being given away in this vassalization process is known as infeodated land. This <I>infeodated land</I> that is held by a tenant may also be known as <I>land under tenure</I>.</P>
<P>The process by which a tenant leases the land to yet another subordinate tenant is known as <I>subinfeudation</I>. Due to the possibility of subinfeudation, there exists four kinds of social statuses in the feudal hierarchy. Ranging from high to low status, you get:</P>
<ul>
<li>Lord Paramount</li>
<li>Tenant-in-chief</li>
<li>Mesne Lord</li>
<li>Tenant Paravail</li>
</ul>
</div>

<div class="py-3">
<H3>Lord Paramount</H3>
<P>A lord paramount is a kind of liege or landlord who has only vassals below him and no liege above him. A lord paramount is therefore the highest possible status in the feudal hierarchy and is ranked at the top of a feudal hierarchy.</P>
</div>
<div class="py-3">
<H3>Tenant-in-chief</H3>
<P>A tenant-in-chief is a kind of landlord who holds lands of a lord paramount under various forms of tenure, but who has in turn subinfeudated part of the land to his vassal. In the feudal hierarchy a tenant-in-chief is ranked just below a lord paramount, but above a mesne lord or tenant paravail.</P>
</div>
<div class="py-3">
<H3>Mesne Lord</H3>
<P>A mesne lord is a kind of landlord who holds lands of a tenant-in-chief under various forms of tenure, but who has in turn subinfeudated part of the land to his vassal. In the feudal hierarchy a mesne lord is ranked just below a tenant-in-chief, but above a tenant paravail.</P>
<P>It is possible that there may exist several ranks of mesne lords, because there are many social ranks.</P>
</div>
<div class="py-3">
<H3>Tenant Paravail</H3>
<P>A tenant paravail is a kind of tenant who holds lands of a mesne lord or a tenant-in-chief or a lord paramount under various forms of tenure. A tenant paravail is ranked at the bottom of a feudal hierarchy. In the feudal hierarchy a tenant paravail is thus ranked below a mesne lord and below a tenant-chief and below a lord paramount.</P>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="court">Court</h2>
<img src="{{ asset('img/images/misc_throne.png') }}" width="40" height="40" alt="misc">
<p>Some characters with particular titles can be made members of a court. These courtiers make information available and assist in the developmenbt of the manorial economy.</p>
</div>	

@endsection