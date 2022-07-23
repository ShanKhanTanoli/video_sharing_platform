<?php

namespace App\Http\Livewire\User\Dashboard\Videos\Add;

use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    use WithFileUploads;

    public $name, $video, $thumbnail, $visibility;

    public $search;

    public function Search()
    {
        return redirect()->route('UserSearchVideo', $this->search);
    }

    public function render()
    {
        return view('livewire.user.dashboard.videos.add.index')
            ->extends('layouts.dashboard');
    }

    public function VideoDetails()
    {
        $validated = $this->validate([
            'thumbnail' => 'required|mimes:jpg,png,jpeg',
            'video' => 'required|file|max:100000000|mimes:mp4',
            'name' => 'required|string',
            'visibility' => 'required|boolean|in:0,1',
        ]);


        //Thumbnail
        $thumbnail = time() . '.' . $validated['thumbnail']->getClientOriginalExtension();
        $thumbnail_path = $validated['thumbnail']->storeAs('public/images/videos/thumbnail', $thumbnail);

        //Vide
        $video = time() . '.' . $validated['video']->getClientOriginalExtension();
        $video_path = $validated['video']->storeAs('public/images/videos/source', $video);

        Video::create([
            'name' => $validated['name'],
            'thumbnail' => $thumbnail_path,
            'source' => $video_path,
            'visibility' => $validated['visibility'],
            'user_id' => Auth::user()->id,
            'slug' => Str::random(10),
        ]);

        session()->flash('success', 'Video uploaded successfully');
        return redirect()->route('UserDashboard');
    }
}
