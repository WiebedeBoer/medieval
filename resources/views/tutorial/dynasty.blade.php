@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<h1>Tutorial</h1>
<h2 class="c">(Step 1) Set up a Dynasty</h2>
	
<div class="row">
	<div class="col-12 d-flex justify-content-center py-3">	
		<div>				
			<a href="/dynasty/create?color=back_ochre&emblem=brown_boar&shape=shield" class="btn btn-primary">Create Dynasty</a>
		</div>
	</div>		
</div>	

<div class="row">
	<div class="justify-content-center p-3 mx-1">	
<h2 class="c">Getting started</h2>
<p>Congratulations on registering for Medieval. Three basic steps need to be completed before you can fully play Medieval. These steps are:</p>
 <ul>
 <li>creating a dynasty,</li> 
 <li>creating player character,</li>
 <li>and creating an estate.</li>
</ul> 
 <p>This tutorial will guide you through this process.</p>	
	</div>
</div>
	
<div class="row">
	<div class="justify-content-center p-3 mx-1">	
<h2 class="c">About Creating a Dynasty</h2>
<p>Setting up a dynasty is the first step. It is recommended that you pick a crest before you fill in an unique name for your dynasty and before you fill in a decription. A description is not required.</p>	
<p>Picking a culture is the only important choice in this this step, because the culture determines the available starting positions for your estate. A culture also determines things such as the religion, the available units, buildings, and so on. For more information about a particular culture, before making your choice, please read further below.</p>
	</div>
</div>

<div class="row">
	<div class="justify-content-center p-3 mx-1">
		<h2 class="c">Cultures</h2>
		@foreach($cultures as $culture)
			<div class="py-1">
				<h3>{{ $culture->culture_name }}</h3>
					{{$culture->culture_description}}
			</div>
		@endforeach
	</div>
</div>

@endsection