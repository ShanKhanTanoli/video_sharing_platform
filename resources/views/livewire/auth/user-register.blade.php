<div>
    <section class="banner-section p120">
        <div class="container">
            <div class="banner-text">
                <h2>Register</h2>
                <p>Please Register to have access to all videos and many more.</p>
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
                <span class="mt-3">Create an account</span>
            </div>
            <!--hd-lg end-->
            <div class="user-account-pr">
                <form wire:submit.prevent='register()'>
                    <div class="input-sec">
                        <input id="name" type="name" wire:model.defer="name"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" autocomplete="name" placeholder="name">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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
                    <div class="input-sec">
                        <input id="password" type="password" wire:model.defer="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            autocomplete="password" placeholder="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-sec">
                        <input id="password_confirmation" type="password" wire:model.defer="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation" autocomplete="password_confirmation"
                            placeholder="confirm password">
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-sec mb-0">
                        <button type="submit">
                            Register
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
