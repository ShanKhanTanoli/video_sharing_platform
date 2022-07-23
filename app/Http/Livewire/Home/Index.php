<?php

namespace App\Http\Livewire\Home;

use App\Models\Video;
use Livewire\Component;

class Index extends Component
{

    public $quantity = 8;

    public $search;

    public function Search()
    {
        return redirect()->route('UserSearchVideo',$this->search);
    }

    public function render()
    {
        $videos = Video::where('visibility', 1)->latest()
            ->take($this->quantity)
            ->get();
        return view('livewire.home.videos.index')
            ->with(['videos' => $videos])
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function LoadMore()
    {
        $this->quantity += 4;
    }
}
