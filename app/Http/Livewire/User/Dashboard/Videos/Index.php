<?php

namespace App\Http\Livewire\User\Dashboard\Videos;

use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $delete;

    protected $paginationTheme = 'bootstrap';

    public $search;

    public function Search()
    {
        return redirect()->route('UserSearchVideo',$this->search);
    }

    public function render()
    {
        $videos = Video::where('user_id', Auth::user()->id)->latest()->paginate(6);
        return view('livewire.user.dashboard.videos.index')
            ->with(['videos' => $videos])
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function Private($id)
    {
        if ($video = Video::find($id)) {
            if ($video->user_id == Auth::user()->id) {
                $video->update(['visibility' => 0]);
                session()->flash('success', 'Video has been private');
            } else return session()->flash('error', 'Something went wrong');
        } else return session()->flash('error', 'Something went wrong');
    }

    public function Public($id)
    {
        if ($video = Video::find($id)) {
            if ($video->user_id == Auth::user()->id) {
                $video->update(['visibility' => 1]);
                session()->flash('success', 'Video has been public');
            } else return session()->flash('error', 'Something went wrong');
        } else return session()->flash('error', 'Something went wrong');
    }


    public function View($slug)
    {
        return redirect(route('UserViewVideo',$slug));
    }

    public function DeleteConfirmation($id)
    {
        if ($video = Video::find($id)) {
            if ($video->user_id == Auth::user()->id) {
                $this->delete = $video;
                $this->emit(['delete']);
            } else return session()->flash('error', 'Something went wrong');
        } else return session()->flash('error', 'Something went wrong');
    }

    public function Delete($id)
    {
        if ($video = Video::find($id)) {
            if ($video->user_id == Auth::user()->id) {
                $video->delete();
                session()->flash('success', 'Deleted successfully');
                return redirect(route('UserVideos'));
            } else return session()->flash('error', 'Something went wrong');
        } else return session()->flash('error', 'Something went wrong');
    }
}
