<div>

    <!--Begin::Alerts-->
    @include('errors.alerts')
    <!--End::Alerts-->

    <!--Begin::Header-->
    @include('livewire.home.videos.partials.header')
    <!--End::Header-->

    <!--Begin::Side Menu-->
    @include('livewire.home.videos.partials.side-menu')
    <!--End::Side Menu-->
    <section class="user-account">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!--Begin::Side Menu-->
                    @include('livewire.user.dashboard.partials.sidebar')
                    <!--End::Side Menu-->
                </div>
                <div class="col-lg-9">
                    <div class="video-details">
                        <!--Begin::Password-->
                        <div class="change-pswd">
                            <h2 class="hd-op">Change password</h2>
                            <form wire:submit.prevent='UpdatePassword()'>
                                <!--ch-pswd end-->
                                <div class="ch-pswd">
                                    <input id="password" type="password" wire:model.defer="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="password" placeholder="New Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--ch-pswd end-->
                                <div class="ch-pswd">
                                    <input id="password_confirmation" type="password"
                                        wire:model.defer="password_confirmation"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation" autocomplete="password_confirmation"
                                        placeholder="Confirm New Password">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--ch-pswd end-->
                                <div class="ch-pswd">
                                    <button type="submit"> Update</button>
                                </div>
                                <!--ch-pswd end-->
                            </form>
                        </div>
                        <!--End::Password-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
