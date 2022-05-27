<header class="container">

    @if(auth('web')->check() && auth('web')->user()->hasRole('Development Officer'))
        <div class="alert alert-danger d-block mb-0 p-3 row text-center text-lg-center">
            <a href="{{ route('admin.do-admin.index') }}">Goto Administration</a>
        </div>
    @endif


    <nav class="navbar justify-content-between">
        <div>
            <a class="navbar-brand" href="{{ route('home.index') }}/{{ $language }}">
                <img alt="{{ config('app.name', 'Laravel') }}" src="{{ asset('images/logo.png') }}" class="img-fluid">
            </a>
            <a href="https://www.gov.lk/" target="_blank"><img alt="{{ config('app.name', 'Laravel') }}"
                                                               src="{{ asset('images/gov-logo.png') }}"
                                                               class="d-none d-md-inline-block"></a>
        </div>
        <div class="text-right">
            <ul class="navbar-nav navbar-nav-sub d-flex flex-row justify-content-end">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item pr-2">
                            <a class="btn btn-primary p-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-primary p-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @endguest
                @auth
                    <li class="nav-item">
                        <a class="btn btn-primary p-2" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endauth
            </ul>
            <div class="d-none d-lg-block">
                <ul class="navbar-nav navbar-nav-sub d-flex flex-row justify-content-end">
                    @if($main_menu && $main_menu->count())
                        @foreach($main_menu as $header_menu)
                            @if(isset($header_menu->id) && $header_menu->id === 32 || $header_menu->id === 29 || $header_menu->id === 24 || $header_menu->id === 30)
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="/{{ $language }}/{{ $header_menu->model_type ? $header_menu->model_type.'/' : '' }}{{ $header_menu->url }}">{{ $header_menu->title }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                    <li class="nav-item"><a href="/careers" class="nav-link">Careers</a></li>
                    <li class="nav-item"><a href="" class="nav-link">|</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link pr-2" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ config('app.languages')[app()->getLocale()] }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/en">English</a>
                            <a class="dropdown-item" href="/si">සිංහල</a>
                            <a class="dropdown-item" href="/ta">தமிழ்</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar d-none d-lg-block navbar-primary navbar-expand-lg">
        <ul class="navbar-nav w-100 nav-fill">
            <li data-menu-id="1" class="nav-item flex-grow-0">
                <a href="{{ route('home.index', $language) }}" title="About us" class="nav-link">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>
            </li>
            @if($main_menu && $main_menu->count())
                @foreach($main_menu as $menu_item)
                    @if($menu_item->id !== 32 && $menu_item->id !== 29 && $menu_item->id !== 24 && $menu_item->id !== 30)
                        @if($menu_item->children && $menu_item->children->count())
                            <li class="nav-item dropdown" data-menu-id="{{ $menu_item->id }}">
                                <a href="/{{ $language }}/{{ $menu_item->model_type ? $menu_item->model_type.'/' : '' }}{{ $menu_item->url }}"
                                   title="{{ $menu_item->title }}" data-toggle="dropdown" class="nav-link">
                                    {{ $menu_item->title }}
                                </a>
                                <div class="dropdown-menu">
                                    @foreach($menu_item->children as $child_item)
                                        <a href="/{{ $language }}/{{ $child_item->model_type ? $child_item->model_type.'/' : '' }}{{ $child_item->url }}"
                                           title="{{ $child_item->title }}" class="dropdown-item">
                                            {{ $child_item->title }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li class="nav-item" data-menu-id="{{ $menu_item->id }}">
                                <a href="/{{ $language }}/{{ $menu_item->model_type ? $menu_item->model_type.'/' : '' }}{{ $menu_item->url }}"
                                   title="{{ $menu_item->title }}"
                                   class="nav-link">
                                    {{ $menu_item->title }}
                                </a>
                            </li>
                        @endif
                    @endif
                @endforeach
            @endif
        </ul>
    </nav>
    <div class="mobile-menu d-lg-none">
        <a href="#mobileMenu" class="mobile-menu-link"><i class="fa fa-bars" aria-hidden="true"></i></a>
        <nav id="mobileMenu">
            <ul>
                @if($main_menu && $main_menu->count())
                    @foreach($main_menu as $menu_item)
                        @if($menu_item->id !== 32 && $menu_item->id !== 29 && $menu_item->id !== 24)
                            @if($menu_item->children && $menu_item->children->count())
                                <li>
                                    <a href="/{{ $language }}/{{ $menu_item->model_type ? $menu_item->model_type.'/' : '' }}{{ $menu_item->url }}"
                                       title="{{ $menu_item->title }}">
                                        {{ $menu_item->title }}
                                    </a>
                                    <ul>
                                        @foreach($menu_item->children as $child_item)
                                            <li>
                                                <a href="/{{ $language }}/{{ $child_item->model_type ? $child_item->model_type.'/' : '' }}{{ $child_item->url }}"
                                                   title="{{ $child_item->title }}">
                                                    {{ $child_item->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="/{{ $language }}/{{ $menu_item->model_type ? $menu_item->model_type.'/' : '' }}{{ $menu_item->url }}"
                                       title="{{ $menu_item->title }}">
                                        {{ $menu_item->title }}
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                @endif
                @if($main_menu && $main_menu->count())
                    @foreach($main_menu as $header_menu)
                        @if(isset($header_menu->id) && $header_menu->id === 32 || $header_menu->id === 29 || $header_menu->id === 24 || $header_menu->id === 30)
                            <li>
                                <a href="/{{ $language }}/{{ $header_menu->model_type ? $header_menu->model_type.'/' : '' }}{{ $header_menu->url }}">{{ $header_menu->title }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
                <li><a href="/register">{{ __('Entrepreneur Registration') }}</a></li>
                <li>
                    <a href="#">{{ __('Language') }}</a>
                    <ul>
                        <li class=" {{ $language == 'en' ? 'active': '' }}">
                            <a class=" " href="/en">English</a>
                        </li>
                        <li class=" {{ $language == 'si' ? 'active': '' }}">
                            <a class=" " href="/si">සිංහල</a>
                        </li>
                        <li class=" {{ $language == 'ta' ? 'active': '' }}">
                            <a class=" " href="/ta">தமிழ்</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>


{{--<!-- Right Side Of Navbar -->--}}
{{--<ul class="navbar-nav ml-auto">--}}
{{--    <!-- Authentication Links -->--}}
{{--    @guest--}}
{{--        @if (Route::has('login'))--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--            </li>--}}
{{--        @endif--}}

{{--        @if (Route::has('register'))--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--            </li>--}}
{{--        @endif--}}
{{--    @else--}}
{{--        <li class="nav-item dropdown">--}}
{{--            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
{{--               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                {{ Auth::user()->name }}--}}
{{--            </a>--}}

{{--            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                    {{ __('Logout') }}--}}
{{--                </a>--}}

{{--                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                    @csrf--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    @endguest--}}
{{--</ul>--}}
