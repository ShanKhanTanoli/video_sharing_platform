<?php


namespace App\Http\Livewire\Home\Videos\Search;

use App\Models\Video;
use Livewire\Component;

class Index extends Component
{

    public $quantity = 20;

    public $videos;

    public function mount($query)
    {
        $videos = Video::where('name', 'LIKE', '%' . $query . '%')
            ->where('visibility', 1)
            ->take($this->quantity)
            ->get();
        $this->videos = $videos;
    }

    public function render()
    {
        $videos = $this->videos;
        return view('livewire.home.videos.search.index')
            ->with(['videos' => $videos])
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function LoadMore()
    {
        $this->quantity += 3;
    }
}
