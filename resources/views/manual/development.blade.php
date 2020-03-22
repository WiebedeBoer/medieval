@extends('layouts.manual')
@section('title')
Manual
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manual</div>
                <div class="card-body">
					<div class="container">
					<h1>Character Development</h1>
					
<div class="py-5 border-top">
<h2 class="m"><a name="development">Character Development</a></h2>
<p>Over the course of your character's lifespan, you may improve your character's statistics through personal turns, combat, or faction turns. Some random events can also improve some of your character's statistics.</p>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="death">Death</a></h2>
<div class="py-3">
<h3>Death in Combat</h3>
<img src="{{ asset('img/images/misc_lion.png') }}" width="40" height="40" alt="misc">
<p>Player characters do not necessarily have to die in combat, they may also be captured, or simply be knocked unconscious or injured. Some injuries and random events can cause a temporary or permanent drop in certain statistics.</p>
</div>
<div class="py-3">
<h3>Old Age</h3>
<p>As years go by your characters may die of illness or old age.</p>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="succession">Lifespan &amp; Succession</a></h2>
<div class="py-3">
<h3>Lifespan</h3>
<p>A game round spans decades or even centuries and thus may have more game years than the average lifespan of an ordinary character. So your character may not survive the full length of a game round. So don't get too attached to your character.</p>
</div>
<div class="py-3">
<h3>Succession</h3>
<img src="{{ asset('img/images/misc_throne.png') }}" width="40" height="40" alt="misc">
<p>In case your main character dies, your new main character will be the succesor or heir of your original character. The successor will be the next generation of your character.</p>
<p>Successors do not get to keep the statistics of the previous generation. So a drop or rise in statistics may occur.</p>
</div>
<div class="py-3">
<h3>Deceased without an Heir</h3>
<p>If you don't have any more living characters, nor an heir, a random new main character, supposedly a new distant relative or adopted dynasty member will appear.</p>
</div>
</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection