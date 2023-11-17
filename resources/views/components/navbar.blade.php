<div class="navbar-collapse collapse" id="navbar-menu" style="">
    <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./">

                    <span class="nav-link-title">
                        Home
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./">

                    <span class="nav-link-title">
                        Events
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./">

                    <span class="nav-link-title">
                        About Us
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./">

                    <span class="nav-link-title">
                        Contact Us
                    </span>
                </a>
            </li>

            @if (isMobile())
                <li class="nav-item py-3">
                    <div class="navbar-nav flex-row order-md-last">
                        <div class="nav-item   d-md-flex me-3">
                            <div class="btn-list">
                                @if (Auth::check())
                                    <a href="{{ route('profile') }}" class="btn   btn-outline-success">
                                        Profile
                                    </a>
                                    <a href="{{ route('logout') }}" class="btn   btn-outline-danger">
                                        Logout
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="btn  btn-outline-success">
                                        Login
                                    </a>
                                    <a href="{{ route('signup') }}" class="btn   btn-outline-warning ">
                                        Sign Up
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>

            @endif

            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" role="button" aria-expanded="false">
                    <span
                        class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->

                    </span>
                    <span class="nav-link-title">
                        Interface
                    </span>
                </a>
                <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                        <div class="dropdown-menu-column">
                            <a class="dropdown-item" href="./alerts.html">
                                Alerts
                            </a>
                            <a class="dropdown-item" href="./accordion.html">
                                Accordion
                            </a>
                            <div class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                    aria-expanded="false">
                                    Authentication
                                </a>
                                <div class="dropdown-menu">
                                    <a href="./sign-in.html" class="dropdown-item">
                                        Sign in
                                    </a>
                                    <a href="./sign-in-link.html" class="dropdown-item">
                                        Sign in link
                                    </a>
                                    <a href="./sign-in-illustration.html" class="dropdown-item">
                                        Sign in with illustration
                                    </a>
                                    <a href="./sign-in-cover.html" class="dropdown-item">
                                        Sign in with cover
                                    </a>
                                    <a href="./sign-up.html" class="dropdown-item">
                                        Sign up
                                    </a>
                                    <a href="./forgot-password.html" class="dropdown-item">
                                        Forgot password
                                    </a>
                                    <a href="./terms-of-service.html" class="dropdown-item">
                                        Terms of service
                                    </a>
                                    <a href="./auth-lock.html" class="dropdown-item">
                                        Lock screen
                                    </a>
                                    <a href="./2-step-verification.html" class="dropdown-item">
                                        2 step verification
                                    </a>
                                    <a href="./2-step-verification-code.html" class="dropdown-item">
                                        2 step verification code
                                    </a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="./blank.html">
                                Blank page
                            </a>
                            <a class="dropdown-item" href="./badges.html">
                                Badges
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./buttons.html">
                                Buttons
                            </a>
                            <div class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#sidebar-cards" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    Cards
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="./cards.html" class="dropdown-item">
                                        Sample cards
                                    </a>
                                    <a href="./card-actions.html" class="dropdown-item">
                                        Card actions
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                    </a>
                                    <a href="./cards-masonry.html" class="dropdown-item">
                                        Cards Masonry
                                    </a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="./carousel.html">
                                Carousel
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./charts.html">
                                Charts
                            </a>
                            <a class="dropdown-item" href="./colors.html">
                                Colors
                            </a>
                            <a class="dropdown-item" href="./colorpicker.html">
                                Color picker
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./datagrid.html">
                                Data grid
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./datatables.html">
                                Datatables
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./dropdowns.html">
                                Dropdowns
                            </a>
                            <a class="dropdown-item" href="./dropzone.html">
                                Dropzone
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <div class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#sidebar-error"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                    aria-expanded="false">
                                    Error pages
                                </a>
                                <div class="dropdown-menu">
                                    <a href="./error-404.html" class="dropdown-item">
                                        404 page
                                    </a>
                                    <a href="./error-500.html" class="dropdown-item">
                                        500 page
                                    </a>
                                    <a href="./error-maintenance.html" class="dropdown-item">
                                        Maintenance page
                                    </a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="./flags.html">
                                Flags
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./inline-player.html">
                                Inline player
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                        </div>
                        <div class="dropdown-menu-column">
                            <a class="dropdown-item" href="./lightbox.html">
                                Lightbox
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./lists.html">
                                Lists
                            </a>
                            <a class="dropdown-item" href="./modals.html">
                                Modal
                            </a>
                            <a class="dropdown-item" href="./maps.html">
                                Map
                            </a>
                            <a class="dropdown-item" href="./map-fullsize.html">
                                Map fullsize
                            </a>
                            <a class="dropdown-item" href="./maps-vector.html">
                                Map vector
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./markdown.html">
                                Markdown
                            </a>
                            <a class="dropdown-item" href="./navigation.html">
                                Navigation
                            </a>
                            <a class="dropdown-item" href="./offcanvas.html">
                                Offcanvas
                            </a>
                            <a class="dropdown-item" href="./pagination.html">
                                <!-- Download SVG icon from http://tabler-icons.io/i/pie-chart -->
                                Pagination
                            </a>
                            <a class="dropdown-item" href="./placeholder.html">
                                Placeholder
                            </a>
                            <a class="dropdown-item" href="./steps.html">
                                Steps
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./stars-rating.html">
                                Stars rating
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./tabs.html">
                                Tabs
                            </a>
                            <a class="dropdown-item" href="./tags.html">
                                Tags
                            </a>
                            <a class="dropdown-item" href="./tables.html">
                                Tables
                            </a>
                            <a class="dropdown-item" href="./typography.html">
                                Typography
                            </a>
                            <a class="dropdown-item" href="./tinymce.html">
                                TinyMCE
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                        </div>
                    </div>
                </div>
            </li> --}}

        </ul>
    </div>
</div>
