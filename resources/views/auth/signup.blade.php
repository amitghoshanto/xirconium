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
        <form class="card card-md card-borderless" method="post" autocomplete="off" novalidate="">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Create account</h2>
                <div class="mb-3">
                    <label class="form-label">Phone Number :</label>
                    <div class="input-group mb-2">
                        <input type="tel" placeholder="" id="lo-verify-number" class="form-control w-100"
                            value="">
                    </div>
                    <small class="form-hint" id="username_avail_result"> </small>
                    @error('contact')
                        <div class="is-invalid"></div>
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-danger w-100">Send Verification Code</button>
                    <div class="hr-text">OR</div>
                    <a href="{{ route('login') }}" class="btn btn-green w-100">Already have account? Login</a>
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
