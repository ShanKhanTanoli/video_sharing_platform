<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Auth;

class Redirect
{
    public static function ToDashboard()
    {
        if ($user = Auth::user()) {
            if ($user->role == "admin") {
                return route('AdminDashboard');
            } elseif ($user->role == "user") {
                return route('UserDashboard');
            } else return route('login');
        } else return route('login');
    }
}
