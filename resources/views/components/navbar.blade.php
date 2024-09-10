<div class="navbar-collapse collapse" id="navbar-menu">
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
                        Buy Tickets
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

            {{-- @if (isMobile())
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

            @endif --}}



        </ul>
    </div>
</div>
