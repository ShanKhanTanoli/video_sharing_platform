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
                        <!--Begin::Videos-->
                        @include('livewire.user.dashboard.videos.partials.videos')
                        <!--End::Videos-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
