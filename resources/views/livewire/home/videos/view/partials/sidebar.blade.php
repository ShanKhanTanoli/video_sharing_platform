<div class="col-lg-4">
    <div class="card position-sticky">

        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">
                    Video List
                </h6>
            </div>
        </div>

        <ul class="nav flex-column bg-white border-radius-lg p-3">

            @foreach($videos as $videolist)
            <li wire:ignore.self
                class="nav-item @if ($videolist->id == $video->id) active bg-gradient-primary @else @endif">
                <a wire:ignore.self
                    class="nav-link text-dark d-flex @if ($videolist->id == $video->id) active text-white @else @endif"
                    href="{{ route('UserViewVideo',$videolist->slug) }}">
                    @if ($videolist->id == $video->id)
                    <i class="fas fa-play-circle me-2"></i>
                    <span class="text-sm">
                        Playing
                    </span>
                    @else
                    <i class="fas fa-play me-2"></i>
                    <span class="text-sm">
                        Play
                    </span>
                    @endif
                </a>
            </li>
            @endforeach

        </ul>
    </div>
</div>
