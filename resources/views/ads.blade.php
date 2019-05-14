@extends('g.layouts.app')

@section('meta')
    @php
        $title = 'Tierlist.gg';
        $description = 'Design System';
    @endphp
@endsection

@section('hero')
    @component('g.partials.hero.home-1')
        @slot('class') hero-size-2 @endslot
        @slot('headerCenter')@endslot
        @slot('title') Ads setup global @endslot
        @slot('subtitle') Adthrive Playground @endslot
        @slot('content')
            <h3 class="mt-5">728x90</h3>
            @component('g.ads.unit')
                @slot('size') 728x90 @endslot
            @endcomponent
            <h3 class="mt-5">Automatic size</h3>
            @component('g.ads.unit')
            @endcomponent
            @endslot
    @endcomponent
@endsection

@section('content')

    @component('g.layouts.content-sidebar')
        @slot('content')
            <div class="row d-block">
                <h3>300x300</h3><br>
                @component('g.ads.unit')
                    @slot('size') 300x300 @endslot
                @endcomponent
            </div>
            <hr>
            <div class="row d-block">
                <h3>300x250</h3>
                @component('g.ads.unit')
                    @slot('size') 300x250 @endslot
                @endcomponent
            </div>
            <hr>
            <div class="row d-block">
                <h3>728x90</h3>
                @component('g.ads.unit')
                    @slot('size') 728x90 @endslot
                @endcomponent
            </div>
            <hr>
            <div class="row d-block">
                <h3>Auto size</h3>
                @component('g.ads.unit')
                @endcomponent
            </div>
            <hr>

                <h3 class="mb-0">Hidden ads, until ad loaded:</h3>
            <p>Please make sure the ads load here:</p>
            <div class="row">
                @component('g.ads.unit')
                    @slot('size') 300x300 hide @endslot
                @endcomponent
                @component('g.ads.unit')
                    @slot('size') 300x250 hide @endslot
                @endcomponent
            </div>
            <hr>
        @endslot
        @slot('sidebar')
            <h3>Sidebar ads</h3>
            <hr>
            <h4>300x250</h4>
            @component('g.ads.unit')
                @slot('size') 300x250 @endslot
                @slot('sidebar')@endslot
            @endcomponent

            <h4>300x300</h4>
            @component('g.ads.unit')
                @slot('size') 300x300 @endslot
                @slot('sidebar')@endslot
            @endcomponent

            <h4>300x600</h4>
            @component('g.ads.unit')
                @slot('size') 300x600 @endslot
                @slot('sidebar')@endslot
            @endcomponent

            <h4>Auto size</h4>
            @component('g.ads.unit')
                @slot('sidebar')@endslot
            @endcomponent
        @endslot
    @endcomponent

@endsection
