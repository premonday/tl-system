@php

$currentURL = url('/');
$local = $currentURL == 'http://tl-mk11.wip';
$apex = $currentURL == 'https://apex.tierlist.gg';
$league = $currentURL == 'https://tierlist.gg';
$mk11 = $currentURL == 'https://mk11.tierlist.gg';
@endphp

<div class="global-site-switcher">
    @include('global.icons.site-menu')
    <div class="global-site-switcher-widget">
        <a href="https://tierlist.gg" class="{{($league) ? 'currentSite' : ''}}">
            <img src="{{ asset('global/img/gameIcons/league.png') }}" alt="LoL">
            <span>League of Legends</span>
        </a>
        <a href="https://apex.tierlist.gg" class="{{($apex) ? 'currentSite' : ''}}">
            <img src="{{ asset('global/img/gameIcons/apex.png') }}" alt="Apex">
            <span>Apex Legends</span>
        </a>
        <a href="https://mk11.tierlist.gg" class="{{($mk11) ? 'currentSite' : ''}}">
            <img src="{{ asset('global/img/gameIcons/mk11.png') }}" alt="MK11">
            <span>Mortal Kombat 11</span>
        </a>
    </div>
</div>
