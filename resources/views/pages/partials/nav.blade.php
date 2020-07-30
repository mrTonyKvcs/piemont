<nav class="navbar navbar-expand-lg fixed-top">
    <p class="navbar-brand">Piemont Consulting Bt.</p>
    <a class="menu-button">
        <span></span>
        <span></span>
    </a>
    <!-- start menuDsk -->
    <div id="menuDsk" class="navbar-desktop">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/#home">{{ trans('site.home') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">{{ trans('site.about') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">{{ trans('site.services') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contacts">{{ trans('site.contact') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pages.documents') }}">@guest{{ trans('site.client-login') }} @else {{ trans('site.documents') }} @endguest</a>
            </li>
        </ul>
    </div>
    <!-- end menuDsk -->
    <!-- start menuMb -->
    <div id="menuMb" class="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/#home">{{ trans('site.home') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">{{ trans('site.about') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">{{ trans('site.services') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contacts">{{ trans('site.contact') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pages.documents') }}">@guest{{ trans('site.client-login') }} @else {{ trans('site.documents') }} @endguest</a>
            </li>
        </ul>
    </div>
    <!-- end menuMb -->
</nav>
