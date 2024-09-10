<div class="navbar-collapse collapse" id="navbar-menu">
    <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
        <ul class="navbar-nav">


            <div class="nav-item   d-md-flex me-3">
                <div class="btn-list">
                    @if (Auth::check())
                        <a href="{{ route('profile') }}" class="btn btn-success ">
                            Profile
                        </a>
                        <a href="{{ route('logout') }}" class="btn btn-danger ">
                            Logout
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-green  ">
                            Login
                        </a>
                        <a href="{{ route('signup') }}" class="btn btn-outline-warning ">
                            Sign Up
                        </a>
                    @endif
                </div>
            </div>






        </ul>
    </div>
</div>
