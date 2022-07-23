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
        <!--Begin::Thumbnail Upload-->
        <section class="upload-detail">
            <div class="container">
                <h3> Add Video Details</h3>
                <div class="vid_thumbainl tr">
                    <label for="file-upload" class="custom-file-upload">
                        Thumbnail (JPG,JPEG,PNG)
                    </label>
                    <input wire:model='thumbnail' id="file-upload" class="form-control  @error('thumbnail') is-invalid @enderror" type="file" />
                    @error('thumbnail')
                    <span style="color:red;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <!--vid_thumbnail tr end-->
                <div class="video_info sr">
                    @if ($thumbnail)
                    @endif
                </div>
                <!--videoo end-->
                <div class="clearfix"></div>
            </div>
        </section>
        <!--End::Thumbnail Upload-->

        <!--Begin::Video Upload-->
        <section class="upload-detail">
            <div class="container">
                <div class="vid_thumbainl tr">
                    <label for="file-upload" class="custom-file-upload">
                        Upload Video (MP4)
                    </label>
                    <input wire:model='video' id="file-upload" class="form-control @error('video') is-invalid @enderror" type="file" />
                    @error('video')
                    <span style="color:red;" class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <!--vid_thumbnail tr end-->
                <div class="video_info sr">
                    @if ($video)
                    @endif
                </div>
                <!--videoo end-->
                <div class="clearfix"></div>
            </div>
        </section>
        <!--End::Video Upload-->

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
                            <option value="[]">Select Visibility</option>
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
                    <button type="submit">Upload</button>
                </div>
            </div>
        </section>
    </form>

        <!--Begin::Simple Footer-->
        @include('livewire.home.videos.partials.simple-footer')
        <!--End::Simple Footer-->

</div>
