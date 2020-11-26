@extends('layouts.place')
@section('title')
Game
@endsection
@section('content')

<!--audio-->
@if($user->audio ==1)
	<audio id="imperia" autoplay loop>
			<source id="parade" src="{{ asset('music/'.$culture->troubadour.'.mp3') }}" type="audio/mp3">
	</audio> 
@endif
				
<div class="card-body">							
	<div class="py-3">					
		@include('place.religion')	
		<h1>{{ $placedata->place_name }}</h1>
		@if($placedata->description !=NULL)
		<div class="m-1">{{ $placedata->description }}</div>
		@endif
		@if($ktusers >=1)
		<div class="d-flex justify-content-center">
			<div class="m-1"><a href="/place/{{$id}}/edit">Edit</a></div>
			<div class="m-1"><a href="/place/{{$id}}/build">Build</a></div>
		</div>
		@endif
		<div class="container-fluid justify-content-center">
			<div class="py-5">
				<div class="customcanvas" id="customcanvas" style="width:100%; height:800px; background-color: rgb(0, 76, 76);margin:auto;"></div>
				<div id="game" class="game"></div>
				@include('place.showscript')
				<!--message-->
        		<div id="message" class="ce"></div>
		
				<div class="minishow">
					<div class="inlinepart">
						@include('place.minimap')
					</div>
					<div class="inlinepart">
						@include('place.minitable')
					</div>
				</div>
			</div>
		</div>
    </div>	
</div>	
@endsection