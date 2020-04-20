@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<h1>Create Character</h1>
	<div class="row">
		<div class="col-12 d-flex justify-content-center py-3">	
	

<div class="createform">
<form method="POST" action="/estates/create" class="pb-3">



<div class="py-1"><input type="submit" value="create estate" class="btn btn-primary"></div>
@csrf
</form>
</div>

</div>
</div>

@endsection