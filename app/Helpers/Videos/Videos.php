<?php

namespace App\Helpers\Videos;

use App\Models\Video;


class Videos
{
    public static function Count($user)
    {
        return Video::where('user_id', $user)->count();
    }
}
