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

    <form wire:submit.prevent='VideoDetails()'>
            <!--Begin::Upload-->
            <section class="upload-detail">
                <div class="container">
                    <h3> Upload Details</h3>
                    <div class="vid_thumbainl tr">
                        <form>
                            <label for="file-upload" class="custom-file-upload">
                                Upload Video
                            </label>
                            <input id="file-upload" type="file" />
                        </form>
                    </div>
                    <!--vid_thumbnail tr end-->
                    <div class="video_info sr">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100" style="width:45%">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>
                        <a href="#" title="" class="cancel_vid">
                            <i class="icon-cancel"></i>
                        </a>
                        <p> Your Video is still uploading, please keep this page open util it’s done.</p>
                    </div>
                    <!--videoo end-->
                    <div class="clearfix"></div>
                </div>
            </section>
            <!--End::Upload-->

        <section class="vid-title-sec">
            <div class="container">
                <div class="vid-title">
                    <h2 class="title-hd">Video Title</h2>
                    <div class="form_field">
                        <input id="name" type="text" wire:model.defer="name"
                            class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name"
                            placeholder="Video Title">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <!--vid-title-->
                <div class="option mt-4">
                    <h2 class="title-hd">Privacy Settings</h2>
                    <div class="form_field">
                        <select class="form-control @error('visibility') is-invalid @enderror" wire:model='visibility'>
                            <option value="1">Public</option>
                            <option value="0">Private</option>
                        </select>
                        @error('visibility')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <!--option end-->
                <div class="clearfix"></div>
                <div class="btn-sbmit">
                    <button type="submit">Save</button>
                </div>
            </div>
        </section>
    </form>

</div>
