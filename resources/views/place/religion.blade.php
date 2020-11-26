<div class="float-left ml-3">
    <div class="crb">
        <div class="inline-block"><a href="/culture/{{ $culture->culture_id }}">{{ $culture->culture_name }}</a></div>
            @if($culture->manorial_culture ==5)
            <div class="inline-block">
            <a href="/religion/5"><img src="{{ asset('img/images/belief_islam.png') }}" width="48" height="48" alt="belief" title="Muslim"></a>
            </div>
            @elseif($culture->manorial_culture ==4)
            <div class="inline-block">
            <a href="/religion/4"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="Greek Orthodox"></a>
            </div>
            @elseif($culture->manorial_culture ==2)
            <div class="inline-block">
            <a href="/religion/2"><img src="{{ asset('img/images/belief_orthodox.png') }}" width="48" height="48" alt="belief" title="Serbian Orthodox"></a>
            </div>
            @elseif($culture->manorial_culture ==3)
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
</div>