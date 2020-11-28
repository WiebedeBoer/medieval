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
        <th class="lg">Culture</th>
        <th class="lg">Dynasty</th>
        <th class="lg">Capital</th>

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
	    
        <td class="pl">{{ $realm->realm_type }}</td>
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
        @if(is_null($realm->rulers))
            <td class="pl">&nbsp;</td> 
            <td class="pl">&nbsp;</td> 
            <td class="pl">&nbsp;</td> 
            <td class="pl">&nbsp;</td> 
            <td class="pl">&nbsp;</td> 
            <td class="pl">&nbsp;</td>  
        @else
            <td class="pl"><a href="/persons/{{ $realm->rulers['ruler'] }}">{{ $realm->ruler_name }}</a></td>
            <td class="pl"><a href="/persons/{{ $realm->rulers['chancellor'] }}">{{ $realm->chancellor }}</a></td> 
            <td class="pl"><a href="/persons/{{ $realm->rulers['chamberlain'] }}">{{ $realm->chamberlain }}</a></td> 
            <td class="pl"><a href="/persons/{{ $realm->rulers['marshall'] }}">{{ $realm->marshall }}</a></td>   
            <td class="pl"><a href="/persons/{{ $realm->rulers['admiral'] }}">{{ $realm->admiral }}</a></td>   
            <td class="pl"><a href="/persons/{{ $realm->rulers['steward'] }}">{{ $realm->steward }}</a></td>  
        @endif        
	</tr>

</tbody>

</table>
</div>
</div>

@endsection