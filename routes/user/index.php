<?php

use Illuminate\Support\Facades\Route;

/*Begin::Dashboard*/
use App\Http\Livewire\User\Dashboard\Index as UserDashboard;
/*End::Dashboard*/


/*Begin::Settings*/
use App\Http\Livewire\User\Dashboard\Settings\Profile\Index as EditProfile;
use App\Http\Livewire\User\Dashboard\Settings\Password\Index as EditPassword;
/*End::Settings*/

/*Begin::Videos*/
use App\Http\Livewire\User\Dashboard\Videos\Index as Videos;
use App\Http\Livewire\User\Dashboard\Videos\Add\Index as AddVideo;
use App\Http\Livewire\User\Dashboard\Videos\View\Index as ViewVideo;
/*End::Videos*/

/*Begin::Auth,User Group*/

Route::middleware(['auth', 'UserMiddleware'])->prefix('User')->group(function () {

    /*Begin::Dashboard*/
    Route::get('Dashboard', UserDashboard::class)->name('UserDashboard');
    /*End::Dashboard*/


    /*Begin::Videos*/

    Route::get('Videos', Videos::class)
        ->name('UserVideos');

    Route::get('AddVideo', AddVideo::class)
        ->name('UserAddVideo');


    Route::get('ViewVideo/{slug}', ViewVideo::class)
        ->name('UserViewVideo');

    /*End::Videos*/

    /*Begin::Settings*/
    Route::get('Settings/Profile', EditProfile::class)->name('UserEditProfile');
    Route::get('Settings/Password', EditPassword::class)->name('UserEditPassword');
    /*End::Settings*/
});
/*End::Auth,User Group*/
