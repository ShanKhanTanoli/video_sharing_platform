<section class="vds-main">
    <div class="vidz-row">
        <div class="container">
            <div class="vidz_sec">
                <h3>Videos</h3>
                <div class="vidz_list">
                    <div class="row">
                        <!--Begin::Video-->
                        @foreach ($videos as $video)
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="{{ route('UserViewVideo', $video->slug) }}" title="">
                                            <img src="{{ asset('dashboard/images/resources/' . $video->thumbnail) }}"
                                                alt="">
                                            <span class="vid-time">10:21</span>
                                        </a>
                                    </div>
                                    <!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3>
                                            <a href="{{ route('UserViewVideo', $video->slug) }}" title="">Kingdom
                                                {!! $video->name !!}
                                            </a>
                                        </h3>
                                        <span> Posted <small
                                                class="posted_dt">{{ date('D M Y', strtotime($video->created_at)) }}</small></span>
                                    </div>
                                </div>
                                <!--videoo end-->
                            </div>
                        @endforeach
                        <!--End::Video-->
                    </div>
                </div>
                <!--vidz_list end-->
            </div>
            <!--vidz_videos end-->
        </div>
    </div>
    <!--vidz-row end-->
</section>
<!--vds-main end-->
