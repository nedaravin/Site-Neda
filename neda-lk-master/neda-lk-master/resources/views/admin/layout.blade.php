<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEDA - Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
          integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
          crossorigin="anonymous"/>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.css"
          integrity="sha512-rBi1cGvEdd3NmSAQhPWId5Nd6QxE8To4ADjM2a6n0BrqQdisZ/RPUlm0YycDzvNL1HHAh1nKZqI0kSbif+5upQ=="
          crossorigin="anonymous"/>
    <style>
        .select2-container--default .select2-results__option[aria-disabled=true] {
            display: none;
        }
    </style>
    <meta name="theme-color" content="#7952b3">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .container {
            max-width: 960px;
        }

        select {
            color: #5f5f5f !important;
        }

        .select2-selection {
            height: 38px !important;
        }

        .select2-selection__rendered {
            height: 38px;
            padding: 4px 0 0 11px;
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">

    <link href="{{ mix('css/do-admin.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
            integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.js"
            integrity="sha512-W76C8qrNYavcaycIH9EijxRuswoS+LCqA1+hq+ECrmjzAbe/SHhTgrwA1uc84husS/Gz50mxOEHPzrcd3sxBqQ=="
            crossorigin="anonymous"></script>

</head>
<body class="bg-light">
<div id="app">
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-8 text-left">
                    <img alt="{{ config('app.name', 'Laravel') }}" src="{{ asset('images/logo.png') }}"
                         class="img-fluid"/>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 btn btn-primary text-white col" href="{{ route('admin.do-admin.entrepreneur') }}">
                    Register New Entrepreneur
                </a>

                <a class="p-2 btn btn-primary text-white col mx-3"
                   href="{{ route('admin.do-admin.view-listing') }}">
                    View My Listing
                </a>

                <a class="p-2 btn btn-primary text-white col mx-3" href="{{ route('admin.do-admin.all-listings') }}">
                    All Listings
                </a>
                @if(auth('web')->check() && auth('web')->user()->hasRole('District Coordinator'))
                    <a class="p-2 btn btn-primary text-white col mx-3" href="{{ route('admin.do-admin.district-listings') }}">
                        All District Listings
                    </a>
                @endif
                <a class="p-2 btn btn-primary text-white col mx-3" href="{{ route('admin.do-admin.download') }}">
                    Download Listings
                </a>
            </nav>
        </div>

        @if(\Session::has('message'))
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="alert alert-warning">
                        {!! \Session::get('message') !!}
                    </div>
                </div>
            </div>
        @endif
    </div>

    @yield('content')

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <div class="alert alert-warning">
            Please contact <a href="tel:0770365588">0770365588</a> during office hours for any technical assistance.
        </div>
        <p class="mb-1">© {{ date('Y') }} National Enterprise Development Authority - Administration</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="https://www.adlux.asia" class="small">Powered by Adlux</a></li>
        </ul>
    </footer>
</div>
@stack('scripts')
</body>
</html>
