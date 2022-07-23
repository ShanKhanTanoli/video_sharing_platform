<?php

namespace App\Http\Livewire\User\Dashboard\Videos\View;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $video;

    public function mount($slug)
    {
        if ($video = Video::where('slug', $slug)->first()) {

            if ($video->user_id == Auth::user()->id) {

                $this->video = $video;

            } else {
                session()->flash('error', 'Video does not exist');
                return redirect(route('UserVideos'));
            }

        } else {
            session()->flash('error', 'Video does not exist');
            return redirect(route('UserVideos'));
        }
    }

    public function render()
    {
        $videos = Video::where('user_id',Auth::user()->id)->latest()->get();
        return view('livewire.user.dashboard.videos.view.index')
            ->with(['videos' => $videos])
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function View($slug)
    {
        return redirect(route('UserViewVideo',$slug));
    }
}
