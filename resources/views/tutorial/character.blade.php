@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<h1>Tutorial</h1>
<h2 class="c">(Step 2) Set up Player Characters</h2>

<div class="row">
	<div class="col-12 d-flex justify-content-center py-3">	
		<div>				
			<a href="/portraits/create?portrait=f001_brown&gender=female" class="btn btn-primary">Create Character</a>
		</div>
	</div>		
</div>

<div class="row">
	<div class="col-12 d-flex justify-content-center py-3">	
<h2 class="c">About Creating a Player Character</h2>
<p>You can create up to four player characters for your dynasty. Adding points to statistics of a character determines what a particular character is good at. It is generally recommend when you start to specialize your character a bit, but each character in somewhat different areas.</p>
<p>For more information about <a href="/manual/stats">statistics</a> and <a href="/manual/skills">skills</a> please see the relevant parts of the manual.</p>
<p>When you have created your characters you can proceed to create an estate.</p>
	</div>
</div>

@endsection