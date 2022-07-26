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

    <!--Begin::Watch Video-->
    @include('livewire.home.videos.view.partials.watch-video')
    <!--End::Watch Video-->

    @if($videos->count() > 0)
    <!--Begin::Footer-->
    @include('livewire.home.videos.partials.footer')
    <!--End::Footer-->
    @endif

</div>
