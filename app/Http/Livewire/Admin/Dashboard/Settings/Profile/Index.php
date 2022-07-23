<?php

namespace App\Http\Livewire\Admin\Dashboard\Settings\Profile;

use Exception;
use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $name, $email;

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function render()
    {
        return view('livewire.admin.dashboard.settings.profile.index')
            ->extends('layouts.dashboard');
    }

    public function UpdateProfile()
    {
        $validated = $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
        ]);
        try {
            Auth::user()->update($validated);
            session()->flash('success', 'Updated successfully');
            return redirect(route('AdminEditProfile'));
        } catch (Exception $e) {
            return session()->flash('error', 'Something went wrong');
        }
    }
}
