@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

<div class="container">					
<h1>{{ $fleet->fleet_name }}</h1>
</div> 

<div class="container-fluid justify-content-center">
	<div class="py-5">
    <h2>Fleet</h2>	
	<table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg">Master</th>
        <th class="lg" colspan="2">Owner</th>
        <th class="lg">Location</th>
	</tr>
	</thead>
	<tbody>	
    <tr>
        @if($fleet->master <=2))
            <td class="pl">&nbsp;</td>
        @else
            <td class="pl"><a href="/persons/{{ $fleet->master }}">{{ $fleet->masters->person_name }}</a></td>
        @endif	   
        @if($fleet->owner <=2)
            <td class="pl">&nbsp;</td>
            <td class="pl"><a href="/dynasty/{{ $fleet->dynasty }}">{{ $fleet->owners->dynasty_name }}</a></td>   
        @else
            <td class="pl"><a href="/persons/{{ $fleet->owner }}">{{ $fleet->owners->person_name }}</a></td>
            <td class="pl"><a href="/dynasty/{{ $fleet->dynasty }}">{{ $fleet->owners->dynasty_name }}</a></td>   
        @endif         
        <td class="pl"><a href="/place/{{ $fleet->place }}">{{ $fleet->places->place_name }}</a></td>	      
	</tr>
</tbody>
</table>

<h2>Ships</h2>
<table class="table-striped tablesorter table">
	<thead>
	<tr>
        <th class="lg">Ship</th>
        <th class="lg">Amount</th>
	</tr>
	</thead>
	<tbody>	
    <tr> 
        <td class="pl">karve</td>      
        <td class="pl">{{ $fleet->karve }}</td>	      
	</tr>
    <tr> 
        <td class="pl">knarr</td>      
        <td class="pl">{{ $fleet->knarr }}</td>	      
	</tr>
    <tr> 
        <td class="pl">dhow</td>      
        <td class="pl">{{ $fleet->dhow }}</td>	      
	</tr>
    <tr> 
        <td class="pl">khelandion</td>      
        <td class="pl">{{ $fleet->khelandion }}</td>	      
	</tr>
    <tr> 
        <td class="pl">cog</td>      
        <td class="pl">{{ $fleet->cog }}</td>	      
	</tr>
    <tr> 
        <td class="pl">hulk</td>      
        <td class="pl">{{ $fleet->hulk }}</td>	      
	</tr>
    <tr> 
        <td class="pl">dromon</td>      
        <td class="pl">{{ $fleet->dromon }}</td>	      
	</tr>
    <tr> 
        <td class="pl">picard</td>      
        <td class="pl">{{ $fleet->picard }}</td>	      
	</tr>
    <tr> 
        <td class="pl">crayer</td>      
        <td class="pl">{{ $fleet->crayer }}</td>	      
	</tr>
    <tr> 
        <td class="pl">hoy</td>      
        <td class="pl">{{ $fleet->hoy }}</td>	      
	</tr>
    <tr> 
        <td class="pl">ballinger</td>      
        <td class="pl">{{ $fleet->ballinger }}</td>	      
	</tr>
    <tr> 
        <td class="pl">caravel</td>      
        <td class="pl">{{ $fleet->caravel }}</td>	      
	</tr>
    <tr> 
        <td class="pl">carrack</td>      
        <td class="pl">{{ $fleet->carrack }}</td>	      
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