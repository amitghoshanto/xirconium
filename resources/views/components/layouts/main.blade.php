<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/xirconium-circle-logo.svg') }}" sizes="any" type="image/svg+xml">
    <title>{{ $meta['title'] ? $meta['title'] . ' - Xirconium' : 'Xirconium' }}</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    @vite(['resources/js/app.js'])
</head>
@if (isMobile())
    <style>
        [data-bs-theme=dark],
        body[data-bs-theme=dark] [data-bs-theme=light] {
            --tblr-bg-surface: #000000;
        }
    </style>
@endif

<body data-bs-theme="dark">
    <div class="page">
        @if (isMobile())
            <div class="sticky-top">
        @endif
        <header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
            <div class="container-xl">
                <div class="col">
                    <h1 class="navbar-brand navbar-brand d-none-navbar-horizontal pe-0 pe-md-3">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/xirconium.svg') }}" alt="" class="navbar-brand-image"
                                height="25px" width="100%">
                        </a>
                    </h1>
                </div>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item d-none  d-md-flex me-3">
                        <div class="btn-list">
                            @if (Auth::check())
                                <a href="{{ route('profile') }}" class="btn btn-success ">
                                    Profile
                                </a>
                                <a href="{{ route('logout') }}" class="btn btn-danger ">
                                    Logout
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn btn-green @if (request()->routeIs('login')) active @endif">
                                    Login
                                </a>
                                <a href="{{ route('signup') }}"
                                    class="btn btn-warning @if (request()->routeIs('signup')) active @endif">
                                    Sign Up
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                    aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <x-navbar />




            </div>
        </header>

        @if (isMobile())
    </div>
    @endif
    {{ $slot }}
    {{-- <hr>
    @dump(Auth::user())
    <hr> --}}

    <footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
                <div class="col-lg-auto ms-lg-auto">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item"><a href="{{ route('AboutUs') }}" class="link-secondary">About
                                Us</a>
                        </li>
                        <li class="list-inline-item"><a href="{{ route('PrivacyPolicy') }}"
                                class="link-secondary">Privacy
                                Policy</a></li>
                        <li class="list-inline-item"><a href="{{ route('TOS') }}" class="link-secondary">Terms
                                &
                                Condition</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item">
                            © 2023 {{ config('app.name') }}. All Rights Reserved.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    </div>
</body>

</html>
