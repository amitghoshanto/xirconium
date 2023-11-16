<x-layouts.main :meta="$meta">


    <div class="container container-tight py-4">
        <div class="text-center mb-4">

        </div>
        <form class="card card-md" method="post" autocomplete="off" novalidate="">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Login</h2>



                <div class="mb-3">
                    <label class="form-label">Phone Number :</label>
                    <div class="input-group mb-2">
                        <input type="tel" placeholder="" id="lo-verify-number" class="form-control w-100">
                    </div>
                    <small class="form-hint" id="username_avail_result"> </small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group input-group-flat">
                        <input type="password" class="form-control" placeholder="Password" autocomplete="off"
                            name="password">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password"
                                data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                    <path
                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                    </path>
                                </svg>
                            </a>
                        </span>
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

</x-layouts.main>
