<?php

namespace App\Http\Livewire\Admin\Dashboard\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\App;

class Index extends Component
{
    public $delete;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users = User::latest()->paginate(10);
        return view('livewire.admin.dashboard.users.index')
            ->with(['users' => $users])
            ->extends('layouts.dashboard')
            ->section('content');
    }

    public function Edit($id)
    {
        if ($user = User::find($id)) {
            return redirect(route('AdminEditUser', ['slug' => $user->slug]));
        }
        return session()->flash('error', 'Something went wrong');
    }

    public function DeleteConfirmation($id)
    {
        if ($user = User::find($id)) {
            $this->delete = $user;
            $this->emit(['delete']);
        } else return session()->flash('error', 'Something went wrong');
    }

    public function Delete($id)
    {
        if ($user = User::find($id)) {
            $user->delete();
            session()->flash('success', 'Deleted successfully');
            return redirect(route('AdminUsers'));
        }else return session()->flash('error', 'Something went wrong');
    }
}
