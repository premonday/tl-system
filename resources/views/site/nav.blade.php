@component('g.layouts.header')
    @slot('headerLeft') Left component here @endslot
    @slot('headerRight') Right component here @endslot
    @slot('headerButtons')
        <a href="#" class="d-none d-sm-inline-block btn btn-outline-white sm">Register</a>
        <a href="#" class="btn btn-outline sm">Login</a>
        @endslot
    @slot('sitename')
        Design System
    @endslot

    @slot('navLinks')
        <li><a href="#">Home</a></li>
        <li><a href="#" class="active">Active Page</a></li>
    @endslot

    @slot('navExtra')
        <li class="d-none d-sm-inline-block"><a href="#" class="active">Active link</a></li>
    @endslot
@endcomponent
