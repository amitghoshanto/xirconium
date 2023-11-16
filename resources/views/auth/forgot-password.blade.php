<x-layouts.main :meta="$meta">


    <div class="container container-tight py-4">
        <div class="text-center mb-4">

        </div>
        <form class="card card-md" method="post" autocomplete="off" novalidate="">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Forgot Password</h2>



                <div class="mb-3">
                    <label class="form-label">Phone Number :</label>
                    <div class="input-group mb-2">
                        <input type="tel" placeholder="" id="lo-verify-number" class="form-control w-100">
                    </div>
                    <small class="form-hint" id="username_avail_result"> </small>
                </div>

                <button type="submit" class="btn btn-danger w-100">Send Verification Code</button>




                <div class="hr-text">OR</div>


                <button type="submit" class="btn btn-green w-100 mb-2">Login</button>

                <a href="{{ route('signup') }}" class="btn btn-warning w-100">Don't have an account? Sign up</a>







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
