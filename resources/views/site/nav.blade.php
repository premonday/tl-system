@component('g.layouts.header')
    @slot('headerLeft')
        @component('g.partials.forms.search')
            @slot('action') /action @endslot
            @slot('placeholder') Placeholder goes here @endslot
            @slot('style') width:300px; @endslot
            @endcomponent
    @endslot
    @slot('headerButtons')
        <a href="#" class="d-none d-sm-inline-block btn btn-outline-white sm">Register</a>
        <a href="#" class="btn btn-outline sm">Login</a>
        @endslot
    @slot('sitename')
        Design System
    @endslot

    @slot('navLinks')
        <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Tier List</a></li>
        <li><a href="/ads" class="{{ request()->is('ads*') ? 'active' : '' }}">Ads</a></li>
        <li><a href="/tabs" class="{{ request()->is('tabs') ? 'active' : '' }}">Page with tabs</a></li>
        <li><a href="/articles" class="{{ request()->is('news*') ? 'active' : '' }}">News</a></li>
    @endslot

    @slot('promoLink')
        <li><a href="#">Enter a different giveaway</a></li>
        @endslot

    @slot('navExtra')
        <li class="d-none d-sm-inline-block"><a href="#" class="active">Active link</a></li>
    @endslot
@endcomponent

