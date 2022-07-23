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
                        <!--Begin::Profile-->
                        <div class="change-pswd">
                            <h2 class="hd-op">Update Profile</h2>
                            <form wire:submit.prevent='UpdateProfile()'>
                                <div class="ch-pswd">
                                    <input id="name" type="text" wire:model.defer="name"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        autocomplete="name" placeholder="Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="ch-pswd">
                                    <input id="user_name" type="text" wire:model.defer="user_name"
                                    class="form-control @error('user_name') is-invalid @enderror" name="user_name"
                                    autocomplete="user_name" placeholder="User Name">
                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="ch-pswd">
                                    <input id="email" type="email" wire:model.defer="email"
                                    class="form-control @error('email') is-invalid @enderror" name="Email"
                                    autocomplete="email" placeholder="Email">
                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="ch-pswd">
                                    <input id="number" type="text" wire:model.defer="number"
                                    class="form-control @error('number') is-invalid @enderror" name="number"
                                    autocomplete="number" placeholder="Number">
                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="ch-pswd">
                                    <input id="address" type="text" wire:model.defer="address"
                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                    autocomplete="address" placeholder="Address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="ch-pswd">
                                    <button type="submit"> Update</button>
                                </div>
                            </form>
                        </div>
                        <!--End::Password-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
