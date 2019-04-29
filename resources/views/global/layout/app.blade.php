<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(env('APP_ENV') == 'development')
        <meta name="robots" content="noindex">@endif
    {{--META Section--}}
    @yield('meta')
    <title>{{ $title }}</title>
    @php $sitename = 'Mortal Kombat Tier List | Tierlist.gg'; @endphp
    <meta name="description" content="{{ $description }}"/>
    <meta property="og:image" content="{{ $image }}"/>
    <meta property="og:type" content="{{ $pageType }}"/>
    <meta property="og:description" content="{{ $description }}"/>
    <meta property="og:title" content="{{ $title }}"/>
    <meta name="twitter:title" content="{{ $title }}"/>
    <meta name="twitter:description" content="{{ $description }}">
    <meta property="og:locale" content="en_US"/>
    <meta property="og:url" content="{{ request()->url() }}"/>
    <meta property="og:site_name" content="{{ $sitename }}"/>
    <meta property="article:publisher" content="https://www.facebook.com/tierlistgg"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('global/img/favIcon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('global/img/favIcon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('global/img/favIcon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('global/img/favIcon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('global/img/favIcon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#29C190">
    <meta name="theme-color" content="#29C190">
    <meta name="google-site-verification" content="Dw0rA6ekWgsqPjXGa4XprRHBJNPuMiEnWJynaOrBgWU" />
    @php
        $canonical = request()->url();
		if(basename(url()->full()) == 'index.php') {
			$canonical = config('app.url');
		}
    @endphp
    <link rel="canonical" href="@yield('canonical', request()->url())">
    <script src="{{ mix('js/bootstrap.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @include('global.layout.analytics')
    @include('global.ads.adthrive')
</head>
<body class="{{ Route::currentRouteName() }}">
<div id="app" class="fixed-nav {{ isset($maxwidth) ? $maxwidth : '' }}">
    {{--@include('global.layout.nav')--}}
    @yield('content')
    {{--@include('layouts.footer')--}}
</div>
</body>
</html>
