<div>
    <section class="banner-section p120">
        <div class="container">
            <div class="banner-text">
                <h2>Sign In</h2>
                <p>Please sign in to have access to all videos and many more.</p>
            </div>
            <!--banner-text end-->
        </div>
    </section>
    <!--banner-section end-->

    <section class="form_popup">

        <div class="login_form">
            <div class="hd-lg">
                <strong>
                    {{ config('app.name', 'Laravel') }}
                </strong>
                <span class="mt-3">Log into your account</span>
            </div>
            <!--hd-lg end-->
            <div class="user-account-pr">
                <form wire:submit.prevent='login()'>
                    <div class="input-sec">
                        <input id="email" type="email" wire:model.defer="email"
                            class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                            autocomplete="email" placeholder="Email">
                        @error('email')
                            <span style="color:red;" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-sec">
                        <input id="password" type="password" wire:model.defer="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="password"
                            placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-sec mb-0">
                        <button type="submit">
                            Login
                            <span wire:loading class="spinner-border spinner-border-sm" role="status"
                                aria-hidden="true"></span>
                        </button>
                    </div>
                    <!--input-sec end-->
                </form>
            </div>
            <!--user-account end--->
            <div class="fr-ps">
                <h1>Don’t have an account? <a href="{{ route('UserRegister') }}" title=""
                        class="show_signup">Signup
                        here.</a></h1>
            </div>
            <!--fr-ps end-->
        </div>
        <!--login end--->

    </section>
    <!--form_popup end-->

</div>
