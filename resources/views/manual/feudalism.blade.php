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
					<h1>Feudalism</h1>
<H2>Units of Land</H2>
<P>There are several kinds of land divisions and subdivisions, such as a:</P>
<ul>
<li>Virgate</li>
<li>Hide</li>
<li>Tithing</li>
<li>Wapentake</li>
<li>Bailiwick</li>
<li>County</li>
</ul>

<H3>Virgate</H3>
<p>The <I>virgate</I> is the smallest unit of land. A virgate is &frac14; of a hide. A <I>virgate</I> is the exact amount of land that can be worked by a serf in one annual season. Thus a maximum of 4 settlers can occupy a hide of land.</p>

<H3>Hide</H3>
<p>The <I>hide</I> is a unit of land. It is equal to 1 grid or 1 plot of land on the map. It is the minimum amount of land required to sustain a feudal title of a: squire, or vicar, or monk, or patrician, or equivalents.</p>

<table class="tabel">
<tr><th>Estate</th><th>catholic</th><th>orthodox</th><th>muslim</th></tr>
<tr><td>nobility</td><td class="b">squire</td><td class="b">squire</td><td class="b">bedouin</td></tr>
<tr><td>clergy</td><td class="b">vicar</td><td class="b">vicar</td><td class="b">mullah</td></tr>
<tr><td>monastic</td><td class="b">monk</td><td class="b">monk</td><td class="u">&nbsp;</td></tr>
<tr><td>burgher</td><td class="b">patrician</td><td class="b">patrician</td><td class="b">patrician</td></tr>
</table>

<H3>Tithing</H3>
<p>A <I>tithing</I> is a unit of land that is equal to 10 <I>hides</I>. It is the minimum amount of land required to sustain a feudal title of a: knight, or pastor, or prior, or schepen, or equivalents.</p>

<table class="tabel">
<tr><th>Estate</th><th>catholic</th><th>orthodox</th><th>muslim</th></tr>
<tr><td>nobility</td><td class="b">knight</td><td class="b">knight / bogatyr</td><td class="b">mamluk / faris</td></tr>
<tr><td>clergy</td><td class="b">pastor</td><td class="b">pastor</td><td class="b">imam</td></tr>
<tr><td>monastic</td><td class="b">prior</td><td class="b">prior</td><td class="u">&nbsp;</td></tr>
<tr><td>burgher</td><td class="b">schepen</td><td class="b">schepen</td><td class="b">schepen</td></tr>
</table>

<H3>Wapentake</H3>
<p>A <I>wapentake</I> is a unit of land that is equal to 100 <I>hides</I>.</p>

<H2>Territorial Divisions</H2>


<H3>Bailiwick</H3>
<P>The minimum size of a <i>bailiwick</i> is at least 1 <I>tithing</I> and a bailiwick must contain at least 1 <i>vill</i> with a <i>court baron</i>.</P>

<H3>Vill</H3>

<p>A <i>vill</i> is a land unit that contains a settlement. This vill can either be a village or a borough. A vill can be a borough, if it has at least 600 inhabitants and a town wall. If a vill does not meet the requirement of a borough, then the vill becomes a <i>village</i> and its overlord a <i>Reeve</i>.</p>


<table class="tabel">
<tr><th>Settlement Category</th><th>Minimum Population</th></tr>
<tr><td>Metropolis</td><td class="r">10000</td></tr>
<tr><td>City</td><td class="r">2000</td></tr>
<tr><td>Town</td><td class="r">600</td></tr>
<tr><td>Village</td><td class="r">120</td></tr>
<tr><td>Hamlet</td><td class="r">60</td></tr>
<tr><td>Farmstead</td><td class="r">20</td></tr>
</table>



<p>A <i>vill</i> within a <i>bailiwick</i> can be a: ward, or burgage, or stift, or minster. The exact type depends on the overlord.</p>


<table class="tabel">
<tr>
<th>Court Baron</th><th>Titular Overlord</th><th>Order</th><th>Ecclesiastical Building</th><th>Manor Building</th>
</tr>
<tr>
<td>ward</td><td>Lord</td><td>nobility</td><td class="u">&nbsp;</td><td class="b">castle</td>
</tr>
<tr>
<td>burgage</td><td>Lord-Mayor</td><td>burgher</td><td class="u">&nbsp;</td><td class="b">townhouse</td>
</tr>
<tr>
<td>stift</td><td>Lord-Bishop</td><td>clergy</td><td class="b">cathedral</td><td class="b">townhouse</td>
</tr>
<tr>
<td>minster</td><td>Lord-Abbot</td><td>monastic</td><td class="b">abbey</td><td class="u">&nbsp;</td>
</tr>
<tr>
<td>medina</td><td>Sharif</td><td>nobility</td><td class="u">&nbsp;</td><td class="b">kasbah</td>
</tr>
<tr>
<td>huree</td><td>Alip</td><td>nobility</td><td class="u">&nbsp;</td><td class="b">maihan</td>
</tr>
<tr>
<td>grad</td><td>Lord</td><td>nobility</td><td class="u">&nbsp;</td><td class="b">hall house</td>
</tr>
</table>

<p>There can be several vills within a <i>bailiwick</i>, but only 1 <i>vill</i> within the <i>bailiwick</i> has a <i>court baron</i>. The <i>vill</i> containing the court baron is the capital of a <i>bailiwick</i>. The overlords of other vills within a <i>bailiwick</i> therefore are of lesser rank than the overlord of the capital.</p>

<p>A borough always has a Lord-Mayor as an overlord. Thus a borough that is also a ward, a stift, or a minster, has two overlords.</p>

<H3>Manor</H3>

<p>A manor encompasses all the hides within a <i>bailiwick</i> that belong to 1 <i>vill</i>.</p>

<p>If the lord of the manor of a capital <i>vill</i> within a <i>bailiwick</i> has the feudal rank of <i>Mesne Lord</i> and has a knight as a <i>tenant paravail</i> or the <i>bailiwick</i> contains another <i>borough</i>, then that lord of the manor is styled with the title of Baron, or equivalent Commander, or Bailiff.</p>

<p>If the manor is not a barony, then it is a lordship. The lord of the manor is then styled with the title of Lord, or equivalent Lord-Abbot, or Lord-Mayor.</p>

<H3>County</H3>
<p>A county is the largest possible territorial division within a realm. It exact size varies, but a county must contain at least 1 <i>vill</i> with a <i>court baron</i> of at least the level of <i>county court</i> and its overlord must have the feudal rank of <i>Tenant-in-chief</i>.</p>

<p>The overlord of a county has the title of Burgrave or equivalent, if the county contains 1 <i>barony</i> and the capital <i>vill</i> of a county is either a <i>ward</i> or a <i>borough</i>.</p>

<p>The overlord of a county has the title of Count or equivalent, if the county contains 1 <i>barony</i>.</p>

<p>The overlord of a county has the title of Marquis or equivalent, if the county contains 1 <i>barony</i> and is bordered to another realm or distuingished as a <i>march</i>.</p>

<p>The overlord of a county has the title of Duke or equivalent, if the county contains 1 <i>barony</i> and is at least the size of a <i>wapentake</i>.</p>

<H3>Diocese</H3>

<p>A <i>bailiwick</i> that has a stift, can have a cathedral. This cathedral can be placed in a stift.</p>

<p>A bishop or archbishop cannot be <i>Tenant Paravail</i>.</p>

<p>If the cathedral is placed in the capital of a <i>county</i> and this capital is a <i>stift</i>, then a Bishop is styled Prince-Bishop, or in case of an Archbishop gains the title Prince-Archbishop.</p>

<table class="tabel">
<tr><th>Feudal Rank</th><th>Bishop</th><th>Archbishop</th></tr>
<tr><th>Lord Paramount</th><td class="u">&nbsp;</td><td class="b">Prince-Archbishop</td></tr>
<tr><th>Tenant-in-chief</th><td class="b">Prince-Bishop</td><td class="b">Prince-Archbishop</td></tr>
<tr><th>Mesne Lord</th><td class="b">Lord-Bishop</td><td class="b">Lord-Archbishop</td></tr>
<tr><th>Tenant Paravail</th><td class="u">&nbsp;</td><td class="u">&nbsp;</td></tr>
</table>


<p>The archbishop ranks above the bishop. Some archbishops and bishops are cardinal bishops. These cardinals can elect a pope.</p>

<H3>Realm &amp; Orders</H3>

<p>All divisions are part of a realm. At the head of a realm is a <i>sovereign</i>. The title of a sovereign varies according to the order and precedence.</p>

<p><b>crusader</b>
<br>Grandmaster is the title for the sovereign of a crusader order. The sovereign of a crusader order ranks in order of precedence below a King.</p>

<p><b>monastic</b>
<br>Prince-Abbot is the title for the sovereign of a monastic order. The sovereign of a monastic order ranks in order of precedence below a King.</p>

<p><b>burgher</b>
<br>The sovereign of the burgher order has the title of Doge. The sovereign of a burgher order ranks in order of precedence below a King.</p>

<p><b>clergy</b>
<br>The monarch of a clergy order is a Prince-Archbishop. The monarch of a clergy order ranks in order of precedence below a King.</p>
<p>An exception to the order of precedence is the Pope. The Pope is the head of the Catholic church, while the Patriarch is the head of an Orthodox church. The title of the Pope is in predence similar to that of an Emperor, but the secular powers of the Pope is equivalent to that of a King.</p>

<p><b>nobility</b>
<br>A King is often the monarch of a nobility order.</p>
<p>A Grand Duke and a Archduke are exceptions to the order of precedence. The Grand Duke is the lesser monarch of federalised union, where two realms are held by the same dynasty not yet consolidated. An Archduke on the other hand is a monarch that has a <i>demesne</i> at least the size of <i>Duke</i>, whose landed estates are both outside and inside an empire.</p>
<p>An emperor is the monarch of an Empire that has conquered and consolidated another <i>Kingdom</i>, or in the case of the Holy Roman Empire is elected as Emperor.</p>


<h2>Feudal Ranks</h2>

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


<H3>Lord Paramount</H3>
<P>A lord paramount is a kind of liege or landlord who has only vassals below him and no liege above him. A lord paramount is therefore the highest possible status in the feudal hierarchy and is ranked at the top of a feudal hierarchy.</P>
<H3>Tenant-in-chief</H3>
<P>A tenant-in-chief is a kind of landlord who holds lands of a lord paramount under various forms of tenure, but who has in turn subinfeudated part of the land to his vassal. In the feudal hierarchy a tenant-in-chief is ranked just below a lord paramount, but above a mesne lord or tenant paravail.</P>
<H3>Mesne Lord</H3>
<P>A mesne lord is a kind of landlord who holds lands of a tenant-in-chief under various forms of tenure, but who has in turn subinfeudated part of the land to his vassal. In the feudal hierarchy a mesne lord is ranked just below a tenant-in-chief, but above a tenant paravail.</P>
<P>It is possible that there may exist several ranks of mesne lords, because there are many social ranks.</P>
<H3>Tenant Paravail</H3>
<P>A tenant paravail is a kind of tenant who holds lands of a mesne lord or a tenant-in-chief or a lord paramount under various forms of tenure. A tenant paravail is ranked at the bottom of a feudal hierarchy. In the feudal hierarchy a tenant paravail is thus ranked below a mesne lord and below a tenant-chief and below a lord paramount.</P>


					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection