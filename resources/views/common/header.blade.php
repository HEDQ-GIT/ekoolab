{{--fix nav on top--}}
<div class="navbar-fixed">
    <nav class="deep-orange">
        {{--center--}}
        <div class="container">
            <div class="nav-wrapper">
                <a href="" class="brand-logo">LOGO</a>
                <a href="" data-activates="slide-menu" class="button-collapse">
                    <i class="mdi-navigation-menu"></i>
                </a>

                {{--main menu--}}
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{ url('/') }}">home</a></li>
                    <li><a href="{{ url('about') }}">about</a></li>
                    <li><a class="dropdown-button" href="" data-activates="services-dropdown">services<i
                                    class="mdi-navigation-arrow-drop-down right"></i></a></li>
                    <li><a href="{{ url('works') }}">works</a></li>
                    <li><a href="{{ url('contact') }}">contact</a></li>

                </ul>
                {{--slide menu--}}
                <ul class="side-nav" id="slide-menu">
                    <li><a href="{{ url('/') }}">home</a></li>
                    <li><a href="{{ url('about') }}">about</a></li>
                    {{--<li><a class="dropdown-button" href="" data-activates="ef-dropdown">services<i--}}
                                    {{--class="mdi-navigation-arrow-drop-down right"></i></a></li>--}}
                    <li><a href="{{ url('works') }}">works</a></li>
                    <li><a href="{{ url('contact') }}">contact</a></li>
                </ul>

                {{--dropdown--}}
                <ul id="services-dropdown" class="dropdown-content deep-orange">
                    <li><a href="{{ url('/') }}" class="white-text">Web</a></li>
                    <li><a href="{{ url('/') }}" class="white-text">App</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/') }}" class="white-text">UX</a></li>
                    <li><a href="{{ url('/') }}" class="white-text">POSTER</a></li>
                </ul>

            </div>
        </div>
    </nav>
</div>