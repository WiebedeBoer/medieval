@extends('layouts.app')
@section('title')
Dashboard
@endsection
@section('content')
@include('warning')
<div class="container">
    <div class="row justify-content-center">
       
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="alert alert-info" role="alert">
                    You are logged in!
					</div>					
					<div class="links">
						<a href="/forum">Forum</a>
						<a href="/manual">Manual</a>
						<a href="/dynasty">Dynasty</a>
						<a href="/region">Worldmap</a>
						<a href="/chronicles">Chronicles</a>
						<a href="/users/{{ Auth::user()->id }}">Account</a>
					</div>

						@if($dynastycount ==1)
							@if($portraitcount <4)
								<div class="py-3"><div class="col-sm-3"><h3>Tutorial:</h3>Step 2<br><a href="/tutorial/character" class="btn btn-primary"> Set up a Player Character</a></div></div>
							@else
								<div class="py-3"><div class="col-sm-3"><h3>Tutorial:</h3>Step 3<br><a href="/tutorial/estate" class="btn btn-primary"> Set up an Estate</a></div></div>
							@endif
						@else
							<div class="py-3"><div class="col-sm-3"><h3>Tutorial:</h3>Step 1<br><a href="/tutorial/dynasty" class="btn btn-primary"> Set up a Dynasty</a></div></div>
						@endif
					
                </div>
            </div>
        
    </div>
</div>
@endsection
