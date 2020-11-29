@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
					<h1>{{ $realm->realm_name }}</h1>
					</div>


<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg">Category</th>
        <th class="lg">Succession</th>
        <th class="lg">Culture</th>
        <th class="lg">Dynasty</th>
        <th class="lg">Capital</th>
        <th class="lg">Presence</th>
    </tr>
	</thead>
	<tbody>
    <tr>	    
        @if($realm->realm_type =="dynastic_kingdom")
            <td class="pl">kingdom</td><td class="pl">agnatic primogeniture</td>
        @elseif($realm->realm_type =="chivalric_kingdom")
            <td class="pl">kingdom</td><td class="pl">agnatic primogeniture</td>
        @elseif($realm->realm_type =="dynastic_grandduchy")
            <td class="pl">grandduchy</td><td class="pl">agnatic primogeniture</td>
        @elseif($realm->realm_type =="dynastic_archduchy")
            <td class="pl">archduchy</td><td class="pl">agnatic primogeniture</td>
        @elseif($realm->realm_type =="dynastic_principality")
            <td class="pl">principality</td><td class="pl">agnatic primogeniture</td>
        @elseif($realm->realm_type =="dynastic_empire")
            <td class="pl">empire</td><td class="pl">agnatic primogeniture</td>
        @elseif($realm->realm_type =="elective_empire")
            <td class="pl">empire</td><td class="pl">agnatic elective monarchy</td>
        @elseif($realm->realm_type =="tanistry_kingdom")
            <td class="pl">petty kingdom</td><td class="pl">tanistry</td>
        @elseif($realm->realm_type =="tanistry_high_kingdom")
            <td class="pl">high kingdom</td><td class="pl">tanistry</td>
        @elseif($realm->realm_type =="dynastic_emirate")
            <td class="pl">emirate</td><td class="pl">agnatic primogeniture</td>
        @elseif($realm->realm_type =="dynastic_caliphate")
            <td class="pl">caliphate</td><td class="pl">agnatic primogeniture</td>
        @elseif($realm->realm_type =="dynastic_sharifate")
            <td class="pl">sharifate</td><td class="pl">agnatic primogeniture</td>
        @elseif($realm->realm_type =="agnatic_principality")
            <td class="pl">principality</td><td class="pl">agnatic seniority</td>
        @elseif($realm->realm_type =="merchant_republic")
            <td class="pl">merchant republic</td><td class="pl">agnatic elective</td>
        @elseif($realm->realm_type =="confederate_crusader")
            <td class="pl">crusader order</td><td class="pl">agnatic elective</td>
        @elseif($realm->realm_type =="crusader")
            <td class="pl">crusader order</td><td class="pl">agnatic elective</td>
        @elseif($realm->realm_type =="papacy")
            <td class="pl">papacy</td><td class="pl">agnatic elective monarchy</td>
        @elseif($realm->realm_type =="horde")
            <td class="pl">horde</td><td class="pl">agnatic primogeniture</td>
        @elseif($realm->realm_type =="steppe_kingdom")
            <td class="pl">steppe kingdom</td><td class="pl">agnatic primogeniture</td>
        @elseif($realm->realm_type =="judicature_kingdom")
            <td class="pl">judgedom</td><td class="pl">agnatic primogeniture</td>
        @else
            <td class="pl">{{ $realm->realm_type }}</td><td class="pl">&nbsp;</td> 
        @endif
	    <td class="pl"><a href="/culture/{{ $realm->culture }}">{{ $realm->cultures->culture_name }}</a></td> 
        @if(is_null($realm->dynasty))
            <td class="pl">&nbsp;</td> 
        @else
            <td class="pl"><a href="/dynasty/{{ $realm->dynasty }}">{{ $realm->dynasties->dynasty_name }}</a></td> 
        @endif 
        @if(is_null($realm->capitals))
            <td class="pl">&nbsp;</td>
        @else
            <td class="pl"><a href="/places/{{ $realm->capitals['capital'] }}">{{ $realm->place_name }}</a></td>   
        @endif  
        @if($realm->existence >=1)
            <td class="pl">{{ $realm->existence }}</td>   
        @else
            <td class="pl">&nbsp;</td>         
        @endif       
	</tr>
</tbody>
<thead>
    <tr>
        <th class="lg">Ruler</th>
        <th class="lg">Chancellor</th>
        <th class="lg">Chamberlain</th>
        <th class="lg">Marshall</th>
        <th class="lg">Admiral</th>
        <th class="lg">Steward</th>
	</tr>
</thead>
<tbody>
    <tr>
    @if(is_null($realm->rulers))
            <td class="pl">&nbsp;</td> 
            <td class="pl">&nbsp;</td> 
            <td class="pl">&nbsp;</td> 
            <td class="pl">&nbsp;</td> 
            <td class="pl">&nbsp;</td> 
            <td class="pl">&nbsp;</td>  
        @else
            @if($realm->rulers['ruler'] >2)
                <td class="pl"><a href="/persons/{{ $realm->rulers['ruler'] }}">{{ $realm->ruler_name }}</a></td>
            @else
                <td class="pl">&nbsp;</td> 
            @endif
            @if($realm->rulers['chancellor'] >2)
                <td class="pl"><a href="/persons/{{ $realm->rulers['chancellor'] }}">{{ $realm->chancellor }}</a></td> 
            @else
                <td class="pl">&nbsp;</td> 
            @endif
            @if($realm->rulers['chamberlain'] >2)
                <td class="pl"><a href="/persons/{{ $realm->rulers['chamberlain'] }}">{{ $realm->chamberlain }}</a></td> 
            @else
                <td class="pl">&nbsp;</td> 
            @endif
            @if($realm->rulers['marshall'] >2)
                <td class="pl"><a href="/persons/{{ $realm->rulers['marshall'] }}">{{ $realm->marshall }}</a></td>  
            @else
                <td class="pl">&nbsp;</td> 
            @endif
            @if($realm->rulers['admiral'] >2)
                <td class="pl"><a href="/persons/{{ $realm->rulers['admiral'] }}">{{ $realm->admiral }}</a></td>
            @else
                <td class="pl">&nbsp;</td> 
            @endif
            @if($realm->rulers['steward'] >2)
                <td class="pl"><a href="/persons/{{ $realm->rulers['steward'] }}">{{ $realm->steward }}</a></td>  
            @else
                <td class="pl">&nbsp;</td> 
            @endif        
        @endif 
    </tr>
</tbody>
</table>
</div>
</div>

@if($realm->existence >=1)
    @include('place.placetable')
@endif 

@endsection