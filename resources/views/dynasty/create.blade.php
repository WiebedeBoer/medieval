@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<h1>Create Dynasty</h1>
	<div class="row">
		<div class="col-12 d-flex justify-content-center py-3">	
	

<div class="createform">
<form method="POST" action="/dynasty" class="pb-3">

<!--naam-->
<div class="general">
<h3>Dynasty name:</h3>
<div class="input-group">
<input type="text" name="dynasty_name" value="{{old('dynasty_name') ?? $dynasty->dynasty_name}}">
</div>
<div>{{$errors->first('dynasty_name')}}</div>
</div>

<!--type-->
<div class="general">
<h3>Culture:</h3>
<div class="input-group">
<select name="culture">
<optgroup label="culture">
@foreach($culture as $dynasty_culture) 
    <option value="{{ $dynasty_culture->culture_id }}" {{ $dynasty_culture->culture_id ==$dynasty->culture ? 'selected' : '' }}>{{ $dynasty_culture->culture_name }}</option>
@endforeach
</select>
</div>
<div>{{$errors->first('culture')}}</div>
</div>

<!--description-->
<div class="dscription">
<h3>Description</h3>
<div class="input-group">
<textarea id="dynasty_description" name="dynasty_description" rows="4" cols="50">{{ old('dynasty_description')  ?? $dynasty->dynasty_description }}</textarea>
</div>
<div>{{$errors->first('dynasty_description')}}</div>
</div>

<input type="submit" value="create dynasty" class="btn btn-primary">
@csrf
</form>
</div>

</div>
</div>

@endsection