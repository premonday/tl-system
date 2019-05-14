@include('g.components.login-register-sidebar')
@component('g.ads.unit')
    @slot('size') 300x300 @endslot
    @slot('sidebar')@endslot
    @endcomponent
@component('g.partials.content.block')
    @slot('block') p-0 mt-3 @endslot
    @slot('class') bg-dark3 @endslot
    @slot('content')
        <h3>Share on social</h3>
        @include('g.components.social-share')
    @endslot
@endcomponent
