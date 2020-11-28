<div class="float-left ml-3">
    <div class="crb">
        <div class="inline-block"><a href="/culture/{{ $cultural->culture_id }}">{{ $cultural->culture_name }}</a></div>
            @if($cultural->manorial_culture ==5)
            <div class="inline-block">
            <a href="/religion/5"><img src="{{ asset('img/images/belief_islam.png') }}" width="48" height="48" alt="belief" title="Muslim"></a>
            </div>
            @elseif($cultural->manorial_culture ==4)
            <div class="inline-block">
            <a href="/religion/4"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="Greek Orthodox"></a>
            </div>
            @elseif($cultural->manorial_culture ==2)
            <div class="inline-block">
            <a href="/religion/2"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="Serbian Orthodox"></a>
            </div>
            @elseif($cultural->manorial_culture ==3)
            <div class="inline-block">
            <a href="/religion/3"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="Russian Orthodox"></a>
            </div>
            @else
            <div class="inline-block">
            <a href="/religion/1"><img src="{{ asset('img/images/belief_catholic.png') }}" width="48" height="48" alt="belief" title="Catholic"></a>
            </div>
            @endif
    </div>
</div>
@if($placedata->realms !=NULL)
<div class="float-left ml-3">
    <div class="crb">
        <div class="inline-block"><a href="/realms/{{ $placedata->realms['realm_id'] }}">{{ $placedata->realms['realm_name'] }}</a></div>
        <div class="inline-block">
            <a href="/realms/{{ $placedata->realms['realm_id'] }}">
                <img src="{{ asset('img/images/misc_lion.png') }}" width="48" height="48" alt="realm" title="realm">
            </a>
        </div>
    </div>
</div>
@endif