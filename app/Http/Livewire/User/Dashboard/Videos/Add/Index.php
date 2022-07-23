<?php

namespace App\Http\Livewire\User\Dashboard\Videos\Add;

use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithFileUploads;

    public $video;

    public function render()
    {
        return view('livewire.user.dashboard.videos.add.index')
            ->extends('layouts.dashboard');
    }
}
