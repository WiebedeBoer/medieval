@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
	<h1>Guilds List</h1>
</div>
@include('chronicles.chartmenu')

                    <div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $guilddata->links() }}
	</div>
</div>
</div>

<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
		<th class="lg">Name</th>        
        <th class="lg">Category</th>
        <th class="lg">Realm</th>
        <th class="lg">Place</th>
        <th class="lg">Master</th>
	</tr>
	</thead>
	<tbody>	
@foreach($guilddata as $guild)
    <tr>
    <td class="pl"><a href="/guilds/{{ $guild->guild_id }}">{{ $guild->guild_name }}</a></td>
    @if($guild->guild_category =="trade_league")
        <td class="league">trade league</td>
    @elseif($guild->guild_category =="trade_kontor")
        <td class="league">trade kontor</td>
    @elseif($guild->guild_category =="trade_fair")
        <td class="fair">trade fair</td>
    @elseif($guild->guild_category =="merchant_guild")
        <td class="merchant">merchant guild</td>
    @elseif($guild->guild_category =="chivalric_order")
        <td class="chivalric">chivalric order</td>
    @elseif($guild->guild_category =="monastic_order")
        <td class="monastic">monastic order</td>
    @elseif($guild->guild_category =="pilgrims")
        <td class="pilgrim">pilgrimage</td>
    @elseif($guild->guild_category =="crusader_order")
        <td class="crusader">crusader order</td>
    @else
        <td class="pl">{{ $guild->guild_category}}</td>
    @endif
    <td class="pl"><a href="/realms/{{ $guild->realm }}">{{ $guild->realms->realm_name }}</a></td>
    <td class="pl"><a href="/persons/{{ $guild->place }}">{{ $guild->places->place_name }}</a></td>
    @if($guild->master >2)
        <td class="pl"><a href="/persons/{{ $guild->master }}">{{ $guild->masters->person_name }}</a></td>
    @else
        <td class="pl">&nbsp;</td> 
    @endif
    
	</tr>
@endforeach
</tbody>
    <thead>
	<tr>
		<th class="lg">Name</th>
        <th class="lg">Category</th>
        <th class="lg">Realm</th>
        <th class="lg">Place</th>
        <th class="lg">Master</th>
	</tr>
	</thead>
</table>
</div>
</div>

<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $guilddata->links() }}
	</div>
</div>
</div>
@endsection