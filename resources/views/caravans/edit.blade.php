@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
<h1>{{ $caravan->caravan_name }}</h1>
</div> 

<div class="container-fluid justify-content-center">
	<div class="py-5">	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg">Master</th>
        <th class="lg" colspan="2">Owner</th>
        <th class="lg">Location</th>
        <th class="lg">Sumpter Horses</th>
		<th class="lg">Camels</th>	
		<th class="lg">Oxen</th>
	</tr>
	</thead>
	<tbody>	
    <tr>
        @if($caravan->master <=2))
            <td class="pl">&nbsp;</td>
        @else
            <td class="pl"><a href="/persons/{{ $caravan->master }}">{{ $caravan->masters->person_name }}</a></td>
        @endif	   
        @if($caravan->owner <=2)
            <td class="pl">&nbsp;</td>
            <td class="pl"><a href="/dynasty/{{ $caravan->dynasty }}">{{ $caravan->owners->dynasty_name }}</a></td>   
        @else
            <td class="pl"><a href="/persons/{{ $caravan->owner }}">{{ $caravan->owners->person_name }}</a></td>
            <td class="pl"><a href="/dynasty/{{ $caravan->dynasty }}">{{ $caravan->owners->dynasty_name }}</a></td>   
        @endif         
        <td class="pl"><a href="/place/{{ $caravan->place }}">{{ $caravan->places->place_name }}</a></td>	   
        <td class="pl">{{ $caravan->sumpter }}</td>
        <td class="pl">{{ $caravan->camel }}</td> 
        <td class="pl">{{ $caravan->oxen }}</td>    
	</tr>
</tbody>
</table>
</div>
</div>

@if(@cargo_count >=1)
<div class="container-fluid justify-content-center">
	<div class="py-5">
    <h2>Cargo</h2>	
	<table class="table-striped tablesorter table">
	<thead>
        <tr>      
            <th class="lg">Cargo</th>            
            <th class="lg">Amount</th>
            <th class="lg" colspan="2">Owner</th>
        </tr>
	</thead>
	<tbody>	
    @foreach($cargoes as $cargo)
        <tr>
            <td class="pl"><a href="/cargo/{{ $cargo->cargo_id }}">{{ $cargo->resources->resource_name }}</a></td>             
            <td class="pl">{{ $cargo->amount }}</td> 
            <td class="pl"><a href="/persons/{{ $cargo->owner }}">{{ $cargo->owners->person_name }}</a></td> 
            <td class="pl"><a href="/dynasty/{{ $cargo->dynasty }}">{{ $cargo->dynasties->dynasty_name }}</td>  
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>
</div>
@endif

@endsection