@extends('layouts.manual')
@section('title')
Manual
@endsection
@section('content')

					<h1>Settlements Economy</h1>
					


<div class="py-5 border-top">
<h2 class="m"><a name="economy">Economic Development</a></h2>
<p>Settlements can be developed by spending turns on commands. Every character gets 1 realm turn per year and 1 personal turn per year.</p>
<p>Personal turns of a character can only be used by the player who owns the character. Realm turns can only be used by a ruler or governor.</p>
<p>A settlement can be developed in several particular areas. These numbers decay with time and hence have to continually be developed.</p>

<table class="tablesorter table">
<thead>
<tr><th class="ma">Economic Area</th><th class="ma">Command</th><th class="ma">Statistics</th><th class="ma">Range</th></tr>
</thead>
<tbody>
<tr><th class="ma">agriculture</th><td class="b">develop agriculture</td><td class="b">engineer &amp; agriculture</td><td class="r">1 - 999</td></tr>
<tr><th class="ma">commerce</th><td class="b">develop industry</td><td class="b">engineer &amp; commerce</td><td class="r">1 - 999</td></tr>
<tr><th class="ma">defenses</th><td class="b">fortify</td><td class="b">engineer &amp; judgement</td><td class="r">1 - 999</td></tr>
<tr><th class="ma">justice</th><td class="b">hold court</td><td class="b">judgement &amp; charisma</td><td class="r">1 - 999</td></tr>

<tr><th class="ma">morale</th><td class="b">rally</td><td class="b">leadership &amp; charisma</td><td class="r">1 - 100</td></tr>
<tr><th class="ma">training</th><td class="b">train</td><td class="b">leadership</td><td class="r">1 - 100</td></tr>
<tr><th class="ma">soldiers</th><td class="b">draft</td><td class="b">leadership</td><td class="r">1 - ???</td></tr>
</tbody>
</table>

<div class="py-3">
<h3>Agriculture</h3>
<p>Agriculture represents the rural economy of a settlement and how much food is being produced. A settlement with high agriculture yields more taxes and more provisions. With the develop agriculture command you can increase agriculture. The efficiency of the develop agriculture command depends on the <i>engineer</i> and <i>agriculture</i> statistics of a character.</p>
</div>
<div class="py-3">
<h3>Commerce</h3>
<p>Commerce represents the general economy of a settlement and how much resources are manufactured. Commerce represents the amount of trade and industry in a settlement. A settlement with high commerce yields more taxes. With the develop commerce command you can increase commerce. The efficiency of the develop commerce command depends on the <i>engineer</i> and <i>commerce</i> statistics of a character.</p>
</div>
<div class="py-3">
<h3>Defenses</h3>
<p>Defenses represents the walls and fortifications of a settlement. Defenses help the defender in a siege. Defenses can be increased with the <i>fortify</i> command. The efficiency of the fortify command depends on the <i>engineer</i> and <i>judgement</i> statistics of a character.</p>
</div>
<div class="py-3">
<h3>Justice</h3>
<p>Justice represents the rule of law in a settlement. Settlements with low justice have more crime, are more prone to rebellions and lose a greater portion of their taxes to corruption. Having a character <u>hold court</u> helps to increase justice in a settlement. The efficiency of the hold court command depends on the <i>judgement</i> and <i>charisma</i> statistics of a character. Rebellions may occur if justice gets too low. The kind of rebels that emerge during a rebellion is determined by the area in which the settlement is located.</p>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="fortification">Defenses Development</a></h2>
<p>The fortifications of a settlement are upgraded, when the defense of a settlement reaches a particular amount of points. Such an upgrade makes it that much harder for a besieger to decrease the defense points of the fortifications of a settlement.</p>
<p>For the settlement to maintain borough status it has to at very least have to have an earthwork.</p>
<table class="ltable"><table class="tablesorter table">
<thead>
<tr><th class="ma">Fortification</th><th class="ma">Minimum Defense</th></tr>
</thead>
<tbody>
<tr><th class="ma">stone wall</th><td class="r">600</td></tr>
<tr><th class="ma">pallisade</th><td class="r">200</td></tr>
<tr><th class="ma">earthwork</th><td class="r">50</td></tr>
</tbody>
</table>
<div class="py-3">
<h3></h3>
<p></p>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="military">Military Development</a></h2>
<p></p>
<div class="py-3">
<h3>Draft</h3>
<p><i>Draft</i> increases the number of soldiers present in a settlement. The <i>leadership</i> statistic increases the efficiency of the draft command. These drafted soldiers will be townwatch in the event of a siege.</p>
<p>These soldiers can be trained and their morale increased.</p>
</div>
<div class="py-3">
<h3>Morale</h3>
<p> Morale can be increased with the <i>rally</i> command. The efficiency of the rally command is determined by the <i>charisma</i> and <i>leadership</i> statistics of a character.</p>
<p></p>
</div>
<div class="py-3">
<h3>Training</h3>
<p>The training of the soldiers can be increased with the train command. The efficiency of the <i>train</i> command is determined by the <i>leadership</i> statistic.</p>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="recruitment">Army Recruitment</a></h2>
<div class="py-3">
<h3>Recruitment</h3>
<p>The drafted soldiers present in a settlement can be levied into an army. A levy decreases the number of soldiers present in a settlement and transfers those soldiers to an army unit.</p>
</div>
</div>


<div class="py-5 border-top">
<h2 class="m"><a name="conquer">Conquering Settlements</a></h2>
<div class="py-3">
<h3>Conquest</h3>
<p>A settlement can be conquered when either its: </p>
<ul>
<li>morale is 1,</li>
<li>defenses are 1, </li>
<li>soldiers are 1 and no army with soldiers is present in the settlement defending it.</li>
</ul>
</div>
</div>

</div>


@endsection