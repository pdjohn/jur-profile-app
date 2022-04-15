<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-widget="navbar-search" href="#" role="button">--}}
{{--                <i class="fas fa-search"></i>--}}
{{--            </a>--}}
{{--            <div class="navbar-search-block">--}}
{{--                <form class="form-inline">--}}
{{--                    <div class="input-group input-group-sm">--}}
{{--                        <input class="form-control form-control-navbar" type="search" placeholder="Search"--}}
{{--                               aria-label="Search">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <button class="btn btn-navbar" type="submit">--}}
{{--                                <i class="fas fa-search"></i>--}}
{{--                            </button>--}}
{{--                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">--}}
{{--                                <i class="fas fa-times"></i>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </li>--}}






        <!-- For Localization -->
        {{--<li class="language">--}}
            {{--@if(app()->getLocale() == 'en')--}}
                {{--<a class="mr-4" href="{{ url('localization/bn') }}">BN</a>--}}
                {{--@else--}}
                {{--<a class="mr-4" href="{{ url('localization/en') }}">EN</a>--}}
                {{--@endif--}}
        {{--</li>--}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class=" mt-1 nav-icon fas fa-user-circle"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                {{--<small class="dropdown-item">Partner Token</small>--}}
                {{--<input class="pl-2 pr-2" type="text" readonly value="{{ getPartnerToken() }}" style="margin: .25rem 1rem">--}}
                {{--<a class="dropdown-item" href="#">FAQ</a>--}}
                {{--<a class="dropdown-item" href="#">Support</a>--}}
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item text-light mt-1"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    <i class="mr-2 fas fa-sign-out-alt"></i>{{ __('Logout') }}
                </a>
            </div>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>


        {{--<li class="nav-item mr-4">--}}
            {{--<a href="{{ route('logout') }}" class="text-light mt-1"--}}
               {{--onclick="event.preventDefault();--}}
                   {{--document.getElementById('logout-form').submit();">--}}
                {{--<i class="mr-2 fas fa-sign-out-alt"></i>{{ __('Logout') }}--}}
            {{--</a>--}}

            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--@csrf--}}
            {{--</form>--}}
        {{--</li>--}}

    </ul>
</nav>
<!-- /.navbar -->
