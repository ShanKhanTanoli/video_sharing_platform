<?php

namespace App\Http\Livewire\User\Dashboard\Videos\View;

use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $video;

    public $quantity = 3;

    public $search;

    public function Search()
    {
        return redirect()->route('UserSearchVideo',$this->search);
    }

    public function mount($slug)
    {
        if ($video = Video::where('slug', $slug)->where('user_id', Auth::user()->id)->first()) {
            $this->video = $video;
        } else {
            session()->flash('error', 'Video does not exist');
            return redirect()->route('UserDashboard');
        }
    }

    public function render()
    {
        $videos = Auth::user()->videos
            ->take($this->quantity);
        return view('livewire.user.dashboard.videos.view.index')
            ->with(['videos' => $videos])
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function LoadMore()
    {
        $this->quantity += 3;
    }
}
