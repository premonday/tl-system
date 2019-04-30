@extends('g.layouts.app')

@section('meta')
    @php
        $title = 'Tierlist.gg';
        $description = 'Design System';
    @endphp
@endsection

@section('content')

    @component('g.partials.hero.home-1')
        @slot('class') hero-size-2 @endslot
        @slot('title') Front-end design system @endslot
    @endcomponent

    @component('g.layouts.content-sidebar')
        @slot('content') Content Here @endslot
        @slot('sidebar') Sidebar Content @endslot
    @endcomponent

@endsection


