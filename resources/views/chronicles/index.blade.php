@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<h1>Chronicles</h1>
	<div class="row">
		<div class="col-12 d-flex justify-content-center py-3">
			<div class="links">
				<a href="/chronicles/?filter=all">All</a> 
				<a href="/chronicles/?filter=battles">Battles</a>
				<a href="/chronicles/?filter=realms">Realms</a>
				<a href="/chronicles/?filter=regions">Regions</a>
				<a href="/chronicles/?filter=places">Places</a>		
				<a href="/chronicles/?filter=guilds">Guilds</a>	
				<a href="/chronicles/charts">Charts &amp; Lists</a>	
			</div>
		</div>
	</div>
@if($chroniclecount >=1)
	<div class="pages">
	{{ $chronicles->links() }}
	</div>
	<div class="chronicles">
	@foreach($chronicles as $event)
	<h3>{{ $event->event_title }}</h3>
	<p>{{ $event->event_description }}</p>
	@endforeach
	</div>
	<div class="pages">
	{{ $chronicles->links() }}
	</div>
@endif
@endsection