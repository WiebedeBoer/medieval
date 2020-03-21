@extends('layouts.app')
@section('title')
Dashboard
@endsection
@section('content')
@include('warning')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
						<a href="/users/{{ Auth::user()->id }}">Account</a>
					</div>								
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
