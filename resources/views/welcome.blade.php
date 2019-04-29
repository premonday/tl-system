@extends('global.layout.app')

{{--META Details--}}
@section('meta')
    @php
        $title = 'Tierlist.gg';
        $description = 'Design System';
        $image = 'https://tierlist.gg/img/meta-image.png';
        $pageType = 'website';
        $maxwidth = 'container-1250';
    @endphp
@endsection
{{--End of META Details--}}

@section('content')

    @component('global.partials.hero.home-1')
        @slot('class') hero-size-2 @endslot
        @slot('bgpos') 50% 20% @endslot
        @slot('title') Front-end design system @endslot
        @slot('subtitle') TBC @endslot
    @endcomponent


@endsection
