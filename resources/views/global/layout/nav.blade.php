<nav class="fixed-nav">
    <div class="container d-flex align-items-center">
        <div class="d-flex flex-row align-items-center justify-content-between justify-content-sm-start w-100">
            <div class="logo-patch d-flex">
                <a href="/" class="tl-logo"><img alt="Tierlist.gg" src="{{ asset('img/tl-logo.svg') }}"/></a>
                <div class="logo-patch--patch">Apex Legends</div>
            </div>

            @include('layouts.mobile-nav')

            <div class="nav-menu d-none d-md-flex">
                <ul>
                    @include('layouts.navlinks')
                </ul>
            </div>

            @include('global.components.site-switcher')

        </div>
    </div>
</nav>
