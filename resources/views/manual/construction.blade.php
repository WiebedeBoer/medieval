@extends('layouts.manual')
@section('title')
Manual
@endsection
@section('content')

					<h1>Construction</h1>
<div class="py-5 border-top">
<h2 class="m"><a name="manor">Manor Upgrades</a></h2>
<img src="{{ asset('img/images/building_castle.png') }}" width="40" height="40" alt="misc">
<p>Manor upgrades require resources for construction.</p>
<div class="py-3">
<h3>Terrain</h3>
<p>Some buildings and upgrades are only available at particular terrains.</p>
<img src="{{ asset('img/trees/zones.png') }}" width="100%" height="auto" alt="climate zones tree" title="climate zones tree">
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="settlement">Settlement Upgrades</a></h2>
<p>Trade goods are used in the construction of buildings, rooms, and furnishings.</p>
<p>Each type of vill has a variety of upgrades.</p>
<div class="py-3">
<h3>Nobility</h3>
<img src="{{ asset('img/trees/fortifications-Gentry.png') }}" width="100%" height="auto" alt="building tree" title="building tree">
</div>
<div class="py-3">
<h3>Clergy</h3>
<img src="{{ asset('img/trees/fortifications-Clergy.png') }}" width="100%" height="auto" alt="building tree" title="building tree">
</div>
<div class="py-3">
<h3>Monastic</h3>
<img src="{{ asset('img/trees/fortifications-Monastic.png') }}" width="100%" height="auto" alt="building tree" title="building tree">
</div>
<div class="py-3">
<h3>Burgage</h3>
<img src="{{ asset('img/trees/fortifications-Burgher.png') }}" width="100%" height="auto" alt="building tree" title="building tree">
</div>
<div class="py-3">
<h3>Roadside Inns</h3>
<img src="{{ asset('img/trees/fortifications-Innkeeper.png') }}" width="100%" height="auto" alt="building tree" title="building tree">
</div>
</div>


@endsection