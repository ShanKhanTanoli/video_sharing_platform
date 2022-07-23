<div class="container-fluid">

    @include('errors.alerts')
    <div class="row mb-4 mt-5">
        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
            <a href="{{ route('UserVideos') }}">
                <div class="card">
                    <div class="card-header p-3 pt-2" style="border-radius: 0;">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fas fa-business-time opacity-10"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">
                                Videos
                            </p>
                            <h4 class="mb-0">
                                {{ Videos::Count(Auth::user()->id) }}
                            </h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
            <a href="{{ route('UserAddVideo') }}">
                <div class="card">
                    <div class="card-header p-3 pt-2" style="border-radius: 0;">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fas fa-plus opacity-10"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">
                                Add New
                            </p>
                            <h4 class="mb-0">
                                Video
                            </h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">
                            Videos
                        </h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-4">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        #
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Video
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Visibility
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        View
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($videos as $video)
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">
                                                        {{ $loop->iteration }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>

                                        @if ($video->source)
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img class="avatar avatar-sm me-3"
                                                        src="{{ Helper::VideoThumbnail($video->id) }}" alt="{!! $video->name !!}">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{!! $video->name !!}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        @else
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img class="avatar avatar-sm me-3"
                                                            src="{{ asset('images/placeholder.jpg') }}" alt="{!! $video->name !!}">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{!! $video->name !!}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                        @endif

                                        @if ($video->visibility)
                                            <td class="align-middle">
                                                <button class="btn btn-sm btn-danger"
                                                    wire:click='Private("{{ $video->id }}")'>
                                                    <span wire:loading wire:target='Private("{{ $video->id }}")'
                                                        class="spinner-border spinner-border-sm" role="status"
                                                        aria-hidden="true"></span>
                                                    <i style="font-size:12px;" class="fas fa-eye-slash"></i>
                                                </button>
                                            </td>
                                        @else
                                            <td class="align-middle">
                                                <button class="btn btn-sm btn-success"
                                                    wire:click='Public("{{ $video->id }}")'>
                                                    <span wire:loading wire:target='Public("{{ $video->id }}")'
                                                        class="spinner-border spinner-border-sm" role="status"
                                                        aria-hidden="true"></span>
                                                    <i style="font-size:12px;" class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        @endif

                                        <td class="align-middle">
                                            <button class="btn btn-sm btn-info"
                                                wire:click='View("{{ $video->slug }}")'>
                                                <span wire:loading wire:target='View("{{ $video->slug }}")'
                                                    class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                                    <i style="font-size:12px;" class="fas fa-play-circle"></i>
                                            </button>
                                        </td>
                                        <td class="align-middle">
                                            <button class="btn btn-sm btn-danger"
                                                wire:click='DeleteConfirmation("{{ $video->id }}")'>
                                                <span wire:loading
                                                    wire:target='DeleteConfirmation("{{ $video->id }}")'
                                                    class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                                    <i style="font-size:12px;" class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $videos->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($delete)
        <!--Begin::DeleteModel-->
        @include('livewire.user.dashboard.partials.delete-modal')
        <!--End::DeleteModel-->
    @endif

    <!--Begin::Script-->
    @section('scripts')
        <script>
            Livewire.on('delete', function() {
                $('#delete-notification').modal('show');
            })
        </script>
    @endsection
    <!--End::Script-->
</div>
