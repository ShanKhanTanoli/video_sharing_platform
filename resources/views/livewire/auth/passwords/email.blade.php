<div>
    <section class="banner-section p120">
        <div class="container">
            <div class="banner-text">
                <h2>Forgot Password</h2>
                <p>Please enter your email to recover the password.</p>
            </div>
            <!--banner-text end-->
        </div>
    </section>
    <!--banner-section end-->

    <section class="form_popup">

        <div class="login_form">
            <div class="hd-lg">
                <img src="{{ asset('dashboard/images/logo.png') }}" alt="">
                <span>Log into your account</span>
            </div>
            <!--hd-lg end-->
            <div class="user-account-pr">
                <form wire:submit.prevent='recoverPassword()'>
                    <div class="input-sec">
                        <input id="email" type="email" wire:model.defer="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" autocomplete="email" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-sec mb-0">
                        <button type="submit">
                            Send Password Reset Link
                            <span wire:loading class="spinner-border spinner-border-sm" role="status"
                                aria-hidden="true"></span>
                        </button>
                    </div>
                    <!--input-sec end-->
                </form>
            </div>
            <!--user-account end--->
            <div class="fr-ps">
                <h1>Already have an account? <a href="{{ route('login') }}" title="" class="show_signup">Login
                        here.</a></h1>
            </div>
            <!--fr-ps end-->
        </div>
        <!--login end--->

    </section>
    <!--form_popup end-->

</div>
