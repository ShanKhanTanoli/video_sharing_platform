<?php

namespace App\Http\Livewire\User\Dashboard;

use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $videos = Video::where('user_id', Auth::user()->id)->latest()->paginate(4);
        return view('livewire.user.dashboard.index')
            ->with(['videos' => $videos])
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function Private($id)
    {
        if ($video = Video::find($id)) {
            if ($video->user_id == Auth::user()->id) {
                $video->update(['visibility' => 0]);
                session()->flash('error', 'Video has been private');
                return redirect()->back();
            } else return session()->flash('error', 'Something went wrong');
        } else return session()->flash('error', 'Something went wrong');
    }

    public function Public($id)
    {
        if ($video = Video::find($id)) {
            if ($video->user_id == Auth::user()->id) {
                $video->update(['visibility' => 1]);
                session()->flash('success', 'Video has been public');
                return redirect()->back();
            } else return session()->flash('error', 'Something went wrong');
        } else return session()->flash('error', 'Something went wrong');
    }


    public function View($slug)
    {
        return redirect(route('UserViewVideo',$slug));
    }

    public function Delete($id)
    {
        if ($video = Video::find($id)) {
            if ($video->user_id == Auth::user()->id) {
                $video->delete();
                session()->flash('success', 'Deleted successfully');
                return redirect()->back();
            } else return session()->flash('error', 'Something went wrong');
        } else return session()->flash('error', 'Something went wrong');
    }
}
