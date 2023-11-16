<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $meta['title'] ? $meta['title'] . ' - Xirconium' : 'Xirconium' }}</title>
    @vite(['resources/js/app.js'])
</head>
<style>
    .hr-text {
        margin: 1rem !important;
    }

    .iti--separate-dial-code .iti__selected-dial-code {
        margin-left: 6px;
    }
</style>

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
                            <img src="{{ asset('images/XIRCONIUM.svg') }}" alt="" class="navbar-brand-image"
                                height="32px" width="100%">
                        </a>
                    </h1>
                </div>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item d-none  d-md-flex me-3">
                        <div class="btn-list">
                            {{-- <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#addpostmodal"> Add Post Modal </a> --}}


                            <a href="{{ route('login') }}"
                                class="btn btn-green @if (request()->routeIs('login')) active @endif">

                                Login
                            </a>

                            <a href="{{ route('signup') }}"
                                class="btn btn-warning @if (request()->routeIs('signup')) active @endif">

                                Sign Up
                            </a>

                        </div>
                    </div>

                    {{-- @if (isMobile())
                        <div class="nav-item  d-md-flex">
                            <div class="btn-list">
                                <a class="nav-link " href="#search" data-bs-toggle="modal"
                                    data-bs-target="#modal-search" aria-label="Search Property">
                                    <span class="nav-link-title">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-search" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="10" cy="10" r="7"></circle>
                                            <line x1="21" y1="21" x2="15" y2="15">
                                            </line>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    @else
                        @if (Auth::check())
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link d-flex lh-1 text-reset p-0 show"
                                    data-bs-toggle="dropdown" aria-label="Open user menu" aria-expanded="true">
                                    <span class="avatar avatar-sm avatar-rounded"
                                        style="background-image: url({{ user_profilepic(auth()->user()->id, auth()->user()->pic) }})"></span>
                                    <div class="d-none d-xl-block ps-2">
                                    </div>
                                </a>

                            </div>
                        @else
                            <div class="nav-item  d-md-flex">
                                <div class="btn-list">
                                    <a class="nav-link " href="{{ route('login.index') }}">
                                        <span class="nav-link-title">
                                            Login / Register
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endif --}}
                </div>
                @isset($navbar)
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                        aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                @endisset
            </div>
        </header>
        @isset($navbar)
            {{ $navbar }}
        @endisset

        @if (isMobile())
    </div>
    @endif
    {{ $slot }}
    @if (!isMobile())
        <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
                <div class="row text-center align-items-center flex-row-reverse">
                    <div class="col-lg-auto ms-lg-auto">
                        <ul class="list-inline list-inline-dots mb-0">

                            <li class="list-inline-item"><a href="" class="link-secondary">About Us</a>
                            </li>
                            <li class="list-inline-item"><a href="" class="link-secondary">Privacy
                                    Policy</a></li>
                            <li class="list-inline-item"><a href="" class="link-secondary">Terms
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
    @endif
    </div>
</body>

</html>
