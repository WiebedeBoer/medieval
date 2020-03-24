@extends('layouts.manual')
@section('title')
Manual
@endsection
@section('content')

					<h1>Manorialism</h1>

<div class="py-5 border-top">
<h2 class="m"><a name="manor">Manor</a></h2>
<p>Exactly what kind of manor you can gain, is determined by what culture, belief, and estate you start with.</p>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="demesne">Demesne</a></h2>

<p>Attached to a feudal rank is the manor and all the land attached to the manor or feudal title is known as a demesne. The name of a demesne varies according to the feudal rank and the category of the <i>vill</i>.</p>
<p>A <i>vill</i> can be a:</p> 
<ul>
<li>ward</li>
<li>burgage</li>
<li>stift</li>
<li>minster</li>
</ul>
<p>A minster <i>vill</i> and a stift <i>vill</i> is only available to Catholic and Orthodox cultures, for Muslim cultures these are reverted to other types of <i>vill</i>. For Orthodox cultures an overlord of a stift or minster cannot be Tenant-in-chief or Lord Paramount.</p>
</div>
<div class="py-3">
<p>The type of land unit varies per order.</p>
<img src="{{ asset('img/trees/land_units.png') }}" width="100%" height="auto" alt="land unit tree" title="land unit tree">
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="settlers">Settlers</a></h2>
<p>Settlers are specialists that work for a <i>vill</i>. You can get a maximum of 4 settlers per <i>hide</i>.</p>
<div class="py-3">
<h3>Settler Requirements</h3>
<p>Settlers of the <i>burgher</i> estate require that the <i>vill</i> have <i>borough</i> status.</p>
<p>A few setttlers are also restricted to a particular belief. Settlers of the <i>clergy</i> or <i>monastic</i> estate require buildings of some sort in the <i>vill</i>.</p>
</div>
<div class="py-3">
<h3>Settler Production</h3>
<p>Settlers produce resources. Settlers that have the ability to herd camels or keep poultry get some meat as provisions.</p>
<p>Settlers with the ability to farm, can work on fields or pastures and can work in forests and can assart land.</p>
</div>
<div class="py-3">
<h3>Assarting</h3>
<p>Initially all land is forest or waste or fallow. Forests are suitable for a hunting lodge, apiary, or forestry. A hunting lodge yields meat, an apiary yields wax and honey, and a forestry yields timber.</p>
<p>Forests can be cleared to make way for fields or pastures. Fields have to be ploughed by oxen or horses.</p>
<p>Fields can yield wine, wheat or vegetables. Pastures can keep livestock. Livestock can yield meat, cheese, and wool.</p>
</div>
</div>

@endsection