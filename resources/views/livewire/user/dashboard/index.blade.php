<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="fas fa-video opacity-10"></i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Videos</p>
                        <h4 class="mb-0">
                            {{ Videos::Count(Auth::user()->id) }}
                        </h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3 text-center">
                    <a href="{{ route('UserVideos') }}" class="btn bg-gradient-dark">
                        Videos
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
