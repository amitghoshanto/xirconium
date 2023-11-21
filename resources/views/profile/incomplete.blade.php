<x-layouts.main :meta="$meta">


    <div class="container container-tight pt-4 ">

        <div class="card card-md card-borderless-mobile">

            <form class="card card-md card-borderless-mobile" method="post" autocomplete="off" novalidate="">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Private Event Registration</h2>
                    <h3 class="card-subtitle text-center mb-4 text-muted">Complete this form to register online.</h3>
                    <p class="my-4 text-center">Please share more details about yourself.
                        Upload your passport-sized photo and enter your details as per your Government ID. All the
                        fields
                        below are mandatory.</p>

                    <hr>


                    <div class="text-center mb-4">
                        @if (Session::has('alert'))
                            <div class="alert alert-important alert-{{ Session::get('alert') }} alert-dismissible"
                                role="alert">
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




                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Legal Name</label>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                id="first_name"
                                value="{{ old('first_name') ? old('first_name') : auth()->user()->first_name }}"
                                autocomplete="off" name="first_name">
                            <label for="first_name">First Name</label>
                            @error('first_name')
                                <div class="is-invalid"></div>
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                id="last_name"
                                value="{{ old('last_name') ? old('last_name') : auth()->user()->last_name }}"
                                autocomplete="off" name="last_name">
                            <label for="last_name">Last Name</label>
                            @error('last_name')
                                <div class="is-invalid"></div>
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <select class="form-select @error('gender') is-invalid @enderror" id="gender"
                                aria-label="Floating label select example" name="gender">
                                <option value="">Choose Gender</option>
                                <option value="1" @if (old('gender') ? old('gender') : auth()->user()->gender == 1) selected @endif>Male</option>
                                <option value="2" @if (old('gender') ? old('gender') : auth()->user()->gender == 2) selected @endif>Female</option>
                                <option value="3" @if (old('gender') ? old('gender') : auth()->user()->gender == 3) selected @endif>Others</option>
                            </select>
                            <label for="gender">Gender</label>
                            @error('gender')
                                <div class="is-invalid"></div>
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>





                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <label class="form-label">Date of Birth</label>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select class="form-select @error('dob_d') is-invalid @enderror" id="dob_d"
                                        aria-label="Floating label select example" name="dob_d">
                                        <option value="">Day</option>
                                        @for ($i = 1; $i <= 31; $i++)
                                            <option value="{{ $i }}"
                                                @if (old('dob_d') ? old('dob_d') : auth()->user()->dob_d == $i) selected @endif>{{ $i }}
                                            </option>
                                        @endfor

                                    </select>
                                    <label for="dob_d">Day</label>
                                    @error('dob_d')
                                        <div class="is-invalid"></div>
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select class="form-select @error('dob_m') is-invalid @enderror" id="dob_m"
                                        aria-label="Floating label select example" name="dob_m">
                                        <option value="">Month</option>


                                        @for ($i = 1; $i <= 12; $i++)
                                            <option value="{{ $i }}"
                                                @if (old('dob_m') ? old('dob_m') : auth()->user()->dob_m == $i) selected @endif>
                                                {{ date('F', mktime(0, 0, 0, $i, 10)) }}
                                            </option>
                                        @endfor




                                    </select>
                                    <label for="dob_m">Month</label>
                                    @error('dob_m')
                                        <div class="is-invalid"></div>
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-floating">
                                    <select class="form-select @error('dob_y') is-invalid @enderror" id="dob_y"
                                        aria-label="Floating label select example" name="dob_y">
                                        <option value="">Year</option>
                                        {{-- 2020 - 1900 --}}
                                        @for ($i = 2020; $i >= 1900; $i--)
                                            <option value="{{ $i }}"
                                                @if (old('dob_y') ? old('dob_y') : auth()->user()->dob_y == $i) selected @endif>
                                                {{ $i }}
                                            </option>
                                        @endfor

                                    </select>
                                    <label for="dob_y">Year</label>
                                    @error('dob_y')
                                        <div class="is-invalid"></div>
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                id="email" value="{{ old('email') ? old('email') : Auth::user()->email }}"
                                autocomplete="off" name="email">
                            <label for="email">Email Address</label>
                            @error('email')
                                <div class="is-invalid"></div>
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Mobile Number (Verified)</label>
                        <div class="input-group mb-2">
                            <input type="tel" placeholder="" id="lo-verify-number" class="form-control w-100"
                                value="+880{{ Auth::user()->contact }}" disabled>
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
                        <button type="submit" class="btn btn-success w-100">Submit</button>

                    </div>
                </div>
            </form>






        </div>












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
