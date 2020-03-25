@extends('layouts.manual')
@section('title')
Manual
@endsection
@section('content')

					<h1>Character Skills</h1>
					
<div class="py-5 border-top">
<h2 class="m"><a name="skills">Character Skills</a></h2>
<p>Skills give a boost to some character statistics.</p>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="development">Development &amp; Management Skills</a></h2>
<div class="py-3">
<h3>Administration</h3>
<img src="{{ asset('img/images/misc_throne.png') }}" width="40" height="40" alt="misc">
<p>A character with the administration skill is more adept at improving public order in a settlement.</p>
</div>
<div class="py-3">
<h3>Engineer</h3>
<p>The engineer skill provides a bonus to the engineer statistic.</p>
</div>
<div class="py-3">
<h3>Farmer</h3>
<p>The farmer skill provides a bonus to the agriculture statistic.</p>
</div>
<div class="py-3">
<h3>Literature</h3>
<img src="{{ asset('img/images/misc_book.png') }}" width="40" height="40" alt="misc">
<p>A character with the literature skill has a better ability to improve his or her development and management statistics.</p>
</div>
<div class="py-3">
<h3>Philosophy</h3>
<p>A character with the philosophy skill has a better ability to improve his or her development and management statistics.</p>
</div>
<div class="py-3">
<h3>Poetry</h3>
<img src="{{ asset('img/images/misc_book.png') }}" width="40" height="40" alt="misc">
<p>The poetry skill provides a bonus to the charisma statistic.</p>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="development">Construction &amp; Miscellaneous Skills</a></h2>
<div class="py-3">
<h3>Architect</h3>
<img src="{{ asset('img/images/misc_leadlight_window.png') }}" width="40" height="40" alt="misc">
<p>A character with the architect skill is better at constructing settlement buildings.</p>
</div>
<div class="py-3">
<h3>Masonry</h3>
<p>A character with the masonry skill is better at constructing settlement buildings.</p>
</div>
<div class="py-3">
<h3>Medicine</h3>
<img src="{{ asset('img/images/asclepius.png') }}" width="40" height="40" alt="misc">
<p>A character with the medicine skill has a greater ability to heal soldiers and other characters.</p>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="combat">Combat &amp; Weapon Skills</a></h2>
<div class="py-3">
<h3>Archery</h3>
<img src="{{ asset('img/images/weapon_longbow.png') }}" width="40" height="40" alt="misc">
<p>The archery skill provides a bonus to the archery statistic.</p>
</div>
<div class="py-3">
<h3>Heroic</h3>
<img src="{{ asset('img/images/misc_lion.png') }}" width="40" height="40" alt="misc">
<p>A character with the heroic skill can launch deveastating special attacks and fights better in duels.</p>
</div>
<div class="py-3">
<h3>Machinery</h3>
<img src="{{ asset('img/images/weapon_cannon.png') }}" width="40" height="40" alt="misc">
<p>A character with the machinery skill is more adept at sieges.</p>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="logistics">Logistics Skills</a></h2>
<div class="py-3">
<h3>Cartography</h3>
<p>The cartography skill provides a bonus to the tracking statistic.</p>
</div>
<div class="py-3">
<h3>Navy</h3>
<img src="{{ asset('img/images/misc_anchor.png') }}" width="40" height="40" alt="misc">
<p>The navy skill provides a bonus to the sailing statistic.</p>
</div>
</div>

</div>

@endsection