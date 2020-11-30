@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')

@if($shop_count >=1)
<div class="container">					
<h1>Workshops List</h1>
</div> 
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $shops->links() }}
	</div>
</div>
</div>
<div class="container-fluid justify-content-center">
	<div class="py-5">
	<table class="table-striped tablesorter table">
	<thead>
        <tr>      
            <th class="lg">Master</th>
            <th class="lg" colspan="2">Owner</th>
            <th class="lg">Place</th>
            <th class="lg">Resource</th>
            <th class="lg">Experience</th>   
            <th class="lg">Amount</th>
            <th class="lg">Price</th>
            <th class="lg">Reserve</th>
        </tr>
	</thead>
	<tbody>
    @foreach($shops as $shop)
        <tr>
            <td class="pl"><a href="/persons/{{ $shop->master }}">{{ $shop->masters->person_name }}</a></td> 
            <td class="pl"><a href="/persons/{{ $shop->owner }}">{{ $shop->owners->person_name }}</a></td> 
            <td class="pl"><a href="/dynasties/{{ $shop->dynasty }}">{{ $shop->dynasties->dynasty_name }}</a></td> 
            <td class="pl"><a href="/place/{{ $shop->place }}">{{ $shop->places->place_name }}</a></td> 
            <td class="pl">{{ $shop->resources->resource_name }}</td>
            <tr><td class="pl">{{ $shop->master_experience }}</td>
            <td class="pl">{{ $shop->sale_amount }}</td>
            <td class="pl">{{ $shop->sale_price }}</td>
            <td class="pl">{{ $shop->sale_reserve }}</td>
        </tr>
        @endforeach
    </tbody>
	<thead>
        <tr>      
            <th class="lg">Master</th>
            <th class="lg" colspan="2">Owner</th>
            <th class="lg">Place</th>
            <th class="lg">Resource</th>
            <th class="lg">Experience</th>   
            <th class="lg">Amount</th>
            <th class="lg">Price</th>
            <th class="lg">Reserve</th>
        </tr>
	</thead>
    </table>
    </div>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
	<div class="plw">
    {{ $shops->links() }}
	</div>
</div>
</div>
@else
<div class="container">					
<h1>Workshops List</h1>
<p>No workshops</p>
</div> 
@endif

@endsection