<x-layouts.main :meta="$meta">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            @if (Session::has('alert'))
                <div class="alert alert-important alert-{{ Session::get('alert') }} alert-dismissible" role="alert">
                    {!! Session::get('title') !!}
                    <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
            @endif
        </div>
        <form class="card card-md  card-borderless-mobile" action="" method="post" autocomplete="off" novalidate="">
            @csrf
            <div class="card-body">
                <h2 class="card-title card-title-lg text-center mb-4 xirconium-title">Verify Account Ownership</h2>
                <p class="my-4 text-center">Please confirm your account by entering the otp code sent to
                    <strong>{{ Session::get('contact') }}</strong>.
                </p>
                <div class="my-5">
                    <div class="row g-4">
                        <div class="col">
                            <div class="row g-2">
                                <div class="col">
                                    <input type="text" class="form-control form-control-lg text-center py-3"
                                        maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input=""
                                        name="code[]">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control form-control-lg text-center py-3"
                                        maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input=""
                                        name="code[]">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control form-control-lg text-center py-3"
                                        maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input=""
                                        name="code[]">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row g-2">
                                <div class="col">
                                    <input type="text" class="form-control form-control-lg text-center py-3"
                                        maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input=""
                                        name="code[]">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control form-control-lg text-center py-3"
                                        maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input=""
                                        name="code[]">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control form-control-lg text-center py-3"
                                        maxlength="1" inputmode="numeric" pattern="[0-9]*" data-code-input=""
                                        name="code[]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-footer">
                    <div class="btn-list flex-nowrap">
                        <button type="submit" class="btn btn-danger w-100 xirconium-red-button">Verify Now</button>
                    </div>
                    <div class="hr-text">OR</div>
                    <a href="{{ route('login') }}" class="btn btn-outline-warning w-100">Already have an account?
                        <b> Login</b></a>
                </div>
            </div>
        </form>
        <div class="text-center text-secondary mt-3">
            It may take a minute to receive your code. Haven't received it? <a
                href="{{ route('forget-password') }}">Resend a new
                code.</a>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var inputs = document.querySelectorAll('[data-code-input]');
            for (let i = 0; i < inputs.length; i++) {
                inputs[i].addEventListener('input', function(e) {
                    if (e.target.value.length === e.target.maxLength && i + 1 < inputs.length) {
                        inputs[i + 1].focus();
                    }
                });
                inputs[i].addEventListener('keydown', function(e) {
                    if (e.target.value.length === 0 && e.keyCode === 8 && i > 0) {
                        inputs[i - 1].focus();
                    }
                });
            }
        });
    </script>
</x-layouts.main>
