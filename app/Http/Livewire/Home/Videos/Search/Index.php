<?php

namespace App\Http\Livewire\Home\Videos\Search;

use Livewire\Component;

class Index extends Component
{
    public function mount($query)
    {

    }

    public function render()
    {
        return view('livewire.home.videos.search.index');
    }
}
