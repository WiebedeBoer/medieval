@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
					<h1>{{ $guilddata->guild_name }}</h1>
					</div>              


<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>      
        <th class="lg">Category</th>
        <th class="lg">Realm</th>
        <th class="lg">Place</th>
        <th class="lg">Master</th>
	</tr>
	</thead>
	<tbody>	
    <tr>
    @if($guilddata->guild_category =="trade_league")
        <td class="league">trade league</td>
    @elseif($guilddata->guild_category =="trade_kontor")
        <td class="league">trade kontor</td>
    @elseif($guilddata->guild_category =="trade_fair")
        <td class="fair">trade fair</td>
    @elseif($guilddata->guild_category =="merchant_guild")
        <td class="merchant">merchant guild</td>
    @elseif($guilddata->guild_category =="chivalric_order")
        <td class="chivalric">chivalric order</td>
    @elseif($guilddata->guild_category =="monastic_order")
        <td class="monastic">monastic order</td>
    @elseif($guilddata->guild_category =="pilgrims")
        <td class="pilgrim">pilgrimage</td>
    @elseif($guilddata->guild_category =="crusader_order")
        <td class="crusader">crusader order</td>
    @else
        <td class="pl">{{ $guilddata->guild_category}}</td>
    @endif
    <td class="pl"><a href="/realms/{{ $guilddata->realm }}">{{ $guilddata->realms->realm_name }}</a></td>
    <td class="pl"><a href="/persons/{{ $guilddata->place }}">{{ $guilddata->places->place_name }}</a></td>
    @if($guilddata->master >2)
        <td class="pl"><a href="/persons/{{ $guilddata->master }}">{{ $guilddata->masters->person_name }}</a></td>
    @else
        <td class="pl">&nbsp;</td> 
    @endif  
	</tr>
</tbody>
</table>
</div>
</div>

@endsection