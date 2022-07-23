<?php

namespace App\Http\Livewire\Home;

use App\Models\Video;
use Livewire\Component;

class Index extends Component
{

    public $quantity = 8;

    public function render()
    {
        $videos = Video::where('visibility', 1)->latest()
            ->take($this->quantity)
            ->get();
        return view('livewire.Home.videos.index')
            ->with(['videos' => $videos])
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function LoadMore()
    {
        $this->quantity += 4;
    }


}
