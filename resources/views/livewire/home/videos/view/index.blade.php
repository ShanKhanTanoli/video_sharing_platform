<div class="container-fluid my-3 py-3 mt-5">
    <div class="row mb-5">
        <!--Begin::Video Sidebar-->
        @include('livewire.home.partials.sidebar')
        <!--Begin::Video Sidebar-->
        <div class="col-lg-8 mt-lg-0">
            <!--Begin::Alerts-->
            @include('errors.alerts')
            <!--End::Alerts-->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">
                                    {!! $video->name !!}
                                </h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="container">
                                <video style="width:100%;" controls class="video" id="video" preload="metadata"
                                    poster="poster.jpg">
                                    <source src="{{ asset('videos/' . $video->source) }}" type="video/mp4">
                                    </source>
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
