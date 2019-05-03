@extends('g.layouts.app')

@section('meta')
    @php
        $title = 'Tierlist.gg';
        $description = 'Design System';
    @endphp
@endsection

@section('hero')
    @component('g.partials.hero.home-1')
        @slot('class') hero-size-3 shapes @endslot
        @slot('hero') https://mk11.tierlist.gg/img/hero.jpg @endslot
        @slot('bgpos') 50% 20% @endslot
        @slot('title') Mortal Kombat 11 Best Characters Tier List @endslot
        @slot('subtitle') Cheat sheet for the top tier characters on MK11 @endslot
    @endcomponent
@endsection

@section('content')
    @component('g.layouts.content-sidebar')
        @slot('content')
            @include('test-content.mk11')
        @endslot
        @slot('sidebar')

            @include('g.components.login-register-sidebar')
            @include('g.ads.300x250-unit')
            <div class="m-4">
                <h3>Share on social</h3>
                @include('g.components.social-share')
            </div>
        @endslot
    @endcomponent

    <div class="test-area" style="position:fixed; bottom:0; width:100%; padding:20px; background:black;">
        Hero Sizes:
        <button id="hero-s1">Regular</button>
        <button id="hero-s2">Size 2</button>
        <button id="hero-s3">Size 3</button>
         |
        <button id="hero-shapes">Toggle: Hero Shapes</button>
        |
        <button id="hero-fade">Toggle: Hero Fade</button>
        |
        <button id="hero-overlap">Toggle: Hero Overlap</button>
    </div>

@endsection


