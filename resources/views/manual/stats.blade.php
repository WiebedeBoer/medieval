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
					<h1>Character Statistics</h1>
					
<div class="py-5 border-top">
<h2 class="m"><a name="stats">Character Statistics</a></h2>
<p>You can develop 17 different statistics for your character. A statistic ranges from a minimum of 1 point to a maximum of 99 points.</p>
<p>Statistics come into five categories:</p>
<p>Development Statistics are important when you want to develop settlements and the economy, these statistics are important if you want your character to have a supportive role.</p>
<p>Management Statistics are a bit of a mixed bag. Statistics like <i>leadership</i> and <i>tactics</i> are important in battle. In general these statistics tend to be more important for characters in a leading role such as a ruler or governor.</p>
<p>Combat proficiences are used in combat. Any player who wants his or her character to be good in battle should develop these statistics.</p>
<p>Weapon proficiences are used for handling weapons. A player who wants his or her character to be good with a particular weapon should develop these statistics.</p>
<p>Logistical proficiencies are important in battle, but can also be important for adventuring.</p>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="development">Development Statistics</a></h2>

<div class="py-3">
<H3>Judgement</H3>
<img src="{{ asset('img/images/misc_throne.png') }}" width="40" height="40" alt="misc">
<P>Judgement represents how fair and sound that character is in politics. This statistic affects the ability by which this character can develop justice and happiness.</P>
</div>
<div class="py-3">
<H3>Engineer</H3>
<P>This statistic represents how effective a character is at constructing buildings and improvements. Characters with a high engineer statistic are better able to equip troops with weapons.</P>
</div>
<div class="py-3">
<H3>Commerce</H3>
<P>This statistic represents how efficient a character can develop industry and trade in a place. Commerce is the primary statistic for developing the economy of a settlement. Characters with a high commerce statistic are more effective at managing industries in a settlement.</P>
</div>
<div class="py-3">
<H3>Agriculture</H3>
<P>This statistic increases the ease by which this character can develop agriculture in a place. Agriculture is of great importance to a character who wishes to feed his or her population or develop resources for industry. Characters with a high agriculture statistic are more effective at managing farms in a settlement.</P>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="management">Management Statistics</a></h2>
<div class="py-3">
<H3>Tactics</H3>
<P>Tactics is a representation of cunning of a character. Characters with a high tactics statistic are better able to setup ploys.</P>
</div>
<div class="py-3">
<H3>Leadership</H3>
<P>Leadership represents how a character performs on the battlefield. This statistic affects the efficiency by which a character performs in combat. Characters with a high leadership statistic are sound tacticians and strategists. Characters with high leadership are better able to organise troops and maintain formation in battle. This statistic affects the ability of a character to draft and train troops and it affects the size of the armies the character leads.</P>
</div>
<div class="py-3">
<H3>Charisma</H3>
<P>Charisma represents how pleasant a character is to be around and how skilled a character is at influencing others through speech and actions. This statistic affects the efficiency by which a character maintains morale of the troops under his or her command. It helps to maintain happiness in a settlement.</P>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="combat">Combat Proficiencies</a></h2>
<div class="py-3">
<H3>Brawn</H3>
<P>Brawn is a representation of physical power and toughness in general of a character. Characters with a high brawn statistic are better able to withstand assassinations and are better able to withstand damage inflicted in battle and duels. Characters with a high brawn statistic are less prone to injury.</P>
</div>
<div class="py-3">
<H3>Strength</H3>
<P>Strength represents the amount of damage a character can cause with a strike in a duel or a battle.</P>
</div>
<div class="py-3">
<H3>Agility</H3>
<P>Agility is a respresentation of nimbleness of a character. Characters with high agility are better able to deflect enemy strikes.</P>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="weapon">Weapon Proficiencies</a></h2>
<div class="py-3">
<H3>Polearms</H3>
<img src="{{ asset('img/images/weapon_halberd.png') }}" width="40" height="40" alt="misc">
<P>Polearms represents the ability of a character to wield weapons like spears, lances, pikes, battle-axes, maces, and pitchforks.</P>
</div>
<div class="py-3">
<H3>Swordsmanship</H3>
<img src="{{ asset('img/images/weapon_sword.png') }}" width="40" height="40" alt="misc">
<P>Swordmanship represents the ability of a character to wield weapons like swords, falxes, and daggers.</P>
</div>
<div class="py-3">
<H3>Archery</H3>
<img src="{{ asset('img/images/weapon_longbow.png') }}" width="40" height="40" alt="misc">
<P>Archery represents the ability of a character to wield weapons like bows.</P>
</div>
</div>

<div class="py-5 border-top">
<h2 class="m"><a name="logistics">Logistical Proficiencies</a></h2>
<div class="py-3">
<H3>Riding</H3>
<P>The riding statistic represents your character's performance on land. The riding statistic affects how good a character performs as a cavalry officer.</P>
</div>
<div class="py-3">
<H3>Sailing</H3>
<img src="{{ asset('img/images/misc_anchor.png') }}" width="40" height="40" alt="misc">
<P>The sailing statistic represents your character's performance on sea or on rivers. The sailing statistic affects how good a character performs in naval combat.</P>
</div>
<div class="py-3">
<H3>Raiding</H3>
<P>Raiding represents how effective a character is at stealing or raiding goods and resources from enemy places. Raiding also represents the ability of a character to wield fire and cause destruction to buildings and settlements. Characters with a high raiding statistic are good at raiding places and aquire more resources and goods. Characters with a high raiding skill are more stealthy and can more easily remain undetected and are more effective at setting up ambushes.</P>
</div>
<div class="py-3">
<H3>Tracking</H3>
<P>Tracking represents how effective a character is at finding precious treasures and rare items. The statistic affects the ability of a character to discover sites and the ability of a character to avoid traps and ambushes.</P>
</div>
</div>

					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection