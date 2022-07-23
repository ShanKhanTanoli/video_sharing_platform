<?php

namespace App\Http\Livewire\Home\Videos\View;

use App\Models\Video;
use Livewire\Component;

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
        if ($video = Video::where('slug', $slug)->where('visibility', 1)->first()) {
            $this->video = $video;
        } else {
            session()->flash('error', 'Video does not exist');
            return redirect()->route('main');
        }
    }

    public function render()
    {
        $videos = Video::where('visibility', 1)->latest()
            ->take($this->quantity)
            ->get();
        return view('livewire.home.videos.view.index')
            ->with(['videos' => $videos])
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function LoadMore()
    {
        $this->quantity += 3;
    }
}
