<?php

namespace App\Http\Livewire\User\Dashboard\Videos\Add;

use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $video;

    public $search;

    public function Search()
    {
        return redirect()->route('UserSearchVideo',$this->search);
    }

    public function render()
    {
        return view('livewire.user.dashboard.videos.add.index')
            ->extends('layouts.dashboard');
    }
}
