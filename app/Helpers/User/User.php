<?php

namespace App\Helpers\User;

use Illuminate\Support\Facades\Auth;

class User
{

    public static function Is()
    {
        if ($user = Auth::user()) {
            if ($user->role == "user") {
                return $user;
            }
            return false;
        }
        return false;
    }

}
