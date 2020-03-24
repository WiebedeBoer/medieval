@extends('layouts.manual')
@section('title')
Manual
@endsection
@section('content')

					<h1>Scholasticism</h1>
<div class="py-5 border-top">
<h2 class="m"><a name="academy">Academy</a></h2>
<p>A ruler who owns a vill with an academy can conduct science.</p>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="science">Science</a></h2>
<img src="{{ asset('img/images/misc_book.png') }}" width="40" height="40" alt="misc">
<p>Science points can be spend on various technologies.</p>
<div class="py-3">
<p>Technologies are divided into six different eras.</p>
<img src="{{ asset('img/trees/technology.png') }}" width="100%" height="auto" alt="tech tree" title="tech tree">
</div>
</div>

@endsection