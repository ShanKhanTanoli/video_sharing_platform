                    <!--Begin::Latest Videos-->
                    <div class="latest_vidz">
                        <div class="latest-vid-option">
                            <h2 class="hd-op">Videos</h2>
                            <div class="clearfix"></div>
                        </div>
                        @if($videos->count() > 0)
                        <!--latest-vid-option end-->
                        <div class="vidz_list">
                            <!--Begin::Videos-->
                            @foreach ($videos as $video)
                                <div class="tb-pr">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-9 col-md-9 col-sm-12">
                                            <div class="tab-history acct_page">
                                                <div class="videoo">
                                                    <div class="vid_thumbainl ms br">
                                                        <a href="{{ route('UserWatchVideo', $video->slug) }}" title="">
                                                            @if ($video->thumbnail)
                                                                <img src="{{ asset('dashboard/images/resources/' . $video->thumbnail) }}"
                                                                    alt="">
                                                            @else
                                                                <img src="{{ asset('images/placeholder.jpg') }}"
                                                                    alt="">
                                                            @endif
                                                            <span class="vid-time">30:32</span>
                                                        </a>
                                                    </div>
                                                    <!--vid_thumbnail end-->
                                                    <div class="video_info ms br">
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
                                                                class="posted_dt">{{ date('M d, Y', strtotime($video->created_at)) }}</small></span>
                                                        <ul>
                                                            @if ($video->visibility)
                                                                <li><span class="br-2">Public</span></li>
                                                            @else
                                                                <li><span class="br-1">Private</span></li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <!--videoo end-->
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-3 col-md-3 col-sm-12">
                                            <div class="icon-list">
                                                <ul>
                                                    <li>
                                                        @if ($video->visibility)
                                                            <button wire:click='Private("{{ $video->id }}")'
                                                                style="background: none; border:none;"><i
                                                                    class="fas fa-eye-slash"></i></button>
                                                        @else
                                                            <button wire:click='Public("{{ $video->id }}")'
                                                                style="background: none; border:none;"><i
                                                                    class="fas fa-eye"></i></button>
                                                        @endif
                                                    </li>
                                                    <li><a href="{{ route('UserWatchVideo',$video->slug) }}" title=""><i class="icon-play"></i></a>
                                                    </li>
                                                    </li>
                                                    <button wire:click='Delete("{{ $video->id }}")'
                                                        style="background: none; border:none;"><i
                                                            class="icon-cancel"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--icon-list end-->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!--End::Videos-->
                        </div>
                        <!--vidz_list end-->
                        {{ $videos->links() }}
                        @else
                        <div class="alert alert-warning" role="alert">
                          <i class="fas fa-info-circle"></i>
                          <strong>Seems like you don't have any video.Add some videos.</strong>
                        </div>
                        @endif
                    </div>
                    <!--End::Latest Videos-->
