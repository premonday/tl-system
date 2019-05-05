@extends('g.layouts.app')

@section('meta')
    @php
        $title = 'Tierlist.gg';
        $description = 'Design System';
    @endphp
@endsection

@section('hero')
    @component('g.partials.hero.home-1')
        @slot('class') hero-size-3 shapes overlap @endslot
        @slot('hero') https://mk11.tierlist.gg/img/hero.jpg @endslot
        @slot('bgpos') 50% 20% @endslot
        @slot('title') Mortal Kombat 11 Best Characters Tier List @endslot
        @slot('subtitle') Cheat sheet for the top tier characters on MK11 @endslot
    @endcomponent
@endsection

@section('content')

    <div class="container side-scroll-container">
        <div class="row mb-1 mb-lg-4 side-scroll-row-1050">
            @component('g.partials.content.block')
                @slot('image') https://placehold.it/200x300 @endslot
                @slot('block') col-4 mb-3 @endslot
                @slot('class') bg-dark3 @endslot
                @slot('content')
                    <h2>Test Block</h2>
                    <p>Mortal Kombat 11 has just been released! Here you can see a tier list of the best characters. The S
                        Tier shows the best characters...</p>
                    <a href="#" class="btn btn-outline">Button Outline</a>
                @endslot
            @endcomponent
            @component('g.partials.content.block')
                @slot('image') https://placehold.it/200x300 @endslot
                @slot('block') col-4 mb-3 @endslot
                @slot('class') bg-dark3 @endslot
                @slot('content')
                    <h2>Test Block</h2>
                    <p>Mortal Kombat 11 has just been released! Here you can see a tier list of the best characters. The S
                        Tier shows the best characters...</p>
                    <a href="#" class="btn btn-primary">Button Primary</a>
                @endslot
            @endcomponent
            @component('g.partials.content.block')
                @slot('image') https://placehold.it/200x300 @endslot
                @slot('block') col-4 mb-3 @endslot
                @slot('class') bg-dark3 @endslot
                @slot('content')
                    <h2>Test Block</h2>
                    <p>Mortal Kombat 11 has just been released! Here you can see a tier list of the best characters. The S
                        Tier shows the best characters...</p>
                    <a href="#" class="btn btn-secondary">Button Secondary</a>
                @endslot
            @endcomponent
        </div>
    </div>

@endsection


