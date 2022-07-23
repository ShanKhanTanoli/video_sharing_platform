<section class="mn-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="mn-vid-sc single_video">
                    <div class="vid-1">
                        <div class="vid-pr">
                            <video id="my-video" class="video-js" controls="controls" preload="auto" width="640"
                                height="264"
                                @if ($video->thumbnail) poster="{{ asset('dashboard/images/resources/' . $video->thumbnail) }}" @else poster="{{ asset('images/placeholder.jpg') }}" @endif
                                data-setup="{}">
                                <source src="{{ asset('videos/' . $video->source) }}" type="video/mp4" />
                                <source src="{{ asset('videos/' . $video->source) }}" type="video/webm" />
                            </video>
                        </div>
                        <!--vid-pr end-->
                        <div class="vid-info">
                            <h3>{!! $video->name !!}</h3>
                        </div>
                        <!--vid-info end-->
                    </div>
                    <!--vid-1 end-->
                </div>
                <!--mn-vid-sc end--->
            </div>
            <!---col-lg-9 end-->
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="vidz-prt">
                        <h2 class="sm-vidz">Similar Videos</h2>
                        <div class="clearfix"></div>
                    </div>
                    <!--vidz-prt end-->
                    <div class="videoo-list-ab">
                        <!--Begin::Other Videos-->
                        @foreach ($videos as $video)
                            <div class="videoo">
                                <div class="vid_thumbainl">
                                    <a href="{{ route('UserWatchVideo', $video->slug) }}" title="">
                                        @if ($video->thumbnail)
                                            <img src="{{ asset('dashboard/images/resources/' . $video->thumbnail) }}"
                                                alt="">
                                        @else
                                            <img src="{{ asset('images/placeholder.jpg') }}" alt="">
                                        @endif
                                        <span class="vid-time">10:21</span>
                                    </a>
                                </div>
                                <!--vid_thumbnail end-->
                                <div class="video_info">
                                    <h3>
                                        <a href="{{ route('UserWatchVideo', $video->slug) }}">
                                            @if (strlen($video->name) > 20)
                                                {!! Str::substr($video->name, 0, 20) !!}
                                            @else
                                                {!! $video->name !!}
                                            @endif
                                        </a>
                                    </h3>
                                    <span> Posted <small
                                            class="posted_dt">{{ date('M d,Y', strtotime($video->created_at)) }}</small></span>
                                </div>
                            </div>
                        @endforeach
                        <!--videoo end-->
                    </div>
                    <!--videoo-list-ab end-->
                </div>
                <!--side-bar end-->
            </div>
        </div>
    </div>
</section>
