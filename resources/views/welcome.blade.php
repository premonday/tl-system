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
        @slot('hero') https://mk11.tierlist.gg/img/hero.jpg @endslot
        @slot('bgpos') 50% 20% @endslot
        @slot('title') Mortal Kombat 11 Best Characters Tier List @endslot
        @slot('subtitle') Cheat sheet for the top tier characters on MK11 @endslot
    @endcomponent
@endsection

@section('content')
    @component('g.layouts.content-sidebar')
        @slot('content')
            <h2>Global template header</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam, enim esse est ex expedita facere fugiat harum itaque iure laudantium quibusdam quisquam quos saepe sequi similique soluta velit veritatis.</p>
            <hr class="my-4">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Header</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, cumque dicta dolor excepturi exercitationem, explicabo fuga incidunt nesciunt perspiciatis placeat quas similique suscipit, veniam. Ab eligendi et laboriosam quo! Harum!</p>
                </div>
                <div class="col-sm-6">
                    <h4>Header</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, cumque dicta dolor excepturi exercitationem, explicabo fuga incidunt nesciunt perspiciatis placeat quas similique suscipit, veniam. Ab eligendi et laboriosam quo! Harum!</p>
                </div>
            </div>
        @endslot
        @slot('sidebar')
            <div class="m-4">
                <h3>Share on social</h3>
                @include('g.components.social-share')
            </div>

            @include('g.components.login-register-sidebar')
        @endslot
    @endcomponent

@endsection


