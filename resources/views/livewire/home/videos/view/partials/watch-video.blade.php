<section class="mn-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="mn-vid-sc single_video">
                    <div class="vid-1">
                        <div class="vid-pr">
                            <video id="my-video" class="video-js" controls="controls" preload="auto" width="640"
                                height="264"
                                @if ($video->thumbnail) poster="{{ asset(Storage::url($video->thumbnail)) }}" @else poster="{{ asset('images/placeholder.jpg') }}" @endif
                                data-setup="{}">
                                <source src="{{ asset(Storage::url($video->source)) }}" type="video/mp4" />
                                <source src="{{ asset(Storage::url($video->source)) }}" type="video/webm" />
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
                        @foreach ($videos as $video_list)
                        @if($video_list->id !== $video->id)
                            <div class="videoo">
                                <div class="vid_thumbainl">
                                    <a href="{{ route('UserWatchVideo', $video_list->slug) }}" title="">
                                        @if ($video_list->thumbnail)
                                            <img src="{{ asset(Storage::url($video->thumbnail)) }}"
                                                alt="">
                                        @else
                                            <img src="{{ asset('images/placeholder.jpg') }}" alt="">
                                        @endif
                                    </a>
                                </div>
                                <!--vid_thumbnail end-->
                                <div class="video_info">
                                    <h3>
                                        <a href="{{ route('UserWatchVideo', $video_list->slug) }}">
                                            @if (strlen($video_list->name) > 20)
                                                {!! Str::substr($video_list->name, 0, 20) !!}
                                            @else
                                                {!! $video_list->name !!}
                                            @endif
                                        </a>
                                    </h3>
                                    <span> Posted <small
                                            class="posted_dt">{{ date('M d,Y', strtotime($video_list->created_at)) }}</small></span>
                                </div>
                            </div>
                            @endif
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
