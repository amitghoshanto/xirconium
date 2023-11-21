<x-layouts.main :meta="$meta">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            @if (Session::has('alert'))
                <div class="alert alert-important alert-{{ Session::get('alert') }} alert-dismissible" role="alert">
                    <div class="d-flex">
                        <div>
                            <!-- Download SVG icon from http://tabler-icons.io/i/alert-circle -->
                            <!-- SVG icon code with class="alert-icon" -->
                        </div>
                        <div>
                            <span>
                                {{ Session::get('title') }}
                            </span>
                        </div>
                    </div>
                    <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
            @endif
        </div>
        <form class="card card-md  card-borderless-mobile" method="post" autocomplete="off" novalidate="">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Login</h2>
                <div class="mb-3">
                    <label class="form-label">Phone Number :</label>
                    <div class="input-group mb-2">
                        <input type="tel" placeholder="" id="lo-verify-number"
                            class="form-control w-100 @error('contact') is-invalid @enderror">
                    </div>
                    <small class="form-hint" id="username_avail_result"> </small>
                    @error('contact')
                        <div class="is-invalid"></div>
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group input-group-flat">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password" autocomplete="off" name="password" id="password">
                        <span class="input-group-text p-2">
                            <a href="#" class="input-group-link" onclick="chnagePassType()"
                                id="show_pass_button">Show password</a>
                        </span>
                        @error('password')
                            <div class="is-invalid"></div>
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <span class="form-check-label">Forgot password? <a href="{{ route('forget-password') }}"
                            tabindex="-1">Click here</a>.</span>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-danger w-100">Login</button>
                    <div class="hr-text">OR</div>
                    <a href="{{ route('signup') }}" class="btn btn-warning w-100">Don't have an account? Sign up</a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <script>
        var phone_number = window.intlTelInput(document.querySelector("#lo-verify-number"), {
            allowDropdown: false,
            separateDialCode: true,
            preferredCountries: ["bd"],
            onlyCountries: ["bd"],
            hiddenInput: ["contact"],
            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });
    </script>
    <script>
        function chnagePassType() {
            var l_pass = document.getElementById("password");
            var show_pass_button = document.getElementById("show_pass_button");
            if (l_pass.type === "password") {
                l_pass.type = "text";
                show_pass_button.innerHTML = "Hide Password";
            } else {
                l_pass.type = "password";
                show_pass_button.innerHTML = "Show Password";
            }
        }
    </script>
</x-layouts.main>
