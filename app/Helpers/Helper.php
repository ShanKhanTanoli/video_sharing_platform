<?php

namespace App\Helpers;

use FFMpeg\FFMpeg;
use App\Models\Video;
use FFMpeg\Coordinate\TimeCode;

class Helper
{
    public static function VideoThumbnail($id)
    {
        if ($video = Video::find($id)) {

            if ($video->source) {

                return asset('images/placeholder.jpg');

            } else return asset('images/placeholder.jpg');
        } else return asset('images/placeholder.jpg');
    }
}
