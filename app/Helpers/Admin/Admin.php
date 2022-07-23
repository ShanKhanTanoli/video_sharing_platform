<?php

namespace App\Helpers\Admin;

use Illuminate\Support\Facades\Auth;

class Admin
{

    public static function Is()
    {
        if ($user = Auth::user()) {
            if ($user->role == "admin") {
                return $user;
            }
            return false;
        }
        return false;
    }
}
