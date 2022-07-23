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
use App\Http\Livewire\User\Dashboard\Videos\Add\Index as AddVideo;
/*End::Videos*/

/*Begin::Watch Video*/
use App\Http\Livewire\Home\Videos\View\Index as WatchVideo;
/*End::Watch Video*/

/*Begin::Auth,User Group*/

Route::middleware(['auth', 'UserMiddleware'])->prefix('User')->group(function () {

    /*Begin::Dashboard*/
    Route::get('Dashboard', UserDashboard::class)->name('UserDashboard');
    /*End::Dashboard*/


    /*Begin::Videos*/
    Route::get('AddVideo', AddVideo::class)
        ->name('UserAddVideo');
    /*End::Videos*/

    /*Begin::Watch Video*/
    Route::get('Video/Watch/{slug}', WatchVideo::class)
        ->name('UserWatchVideo');
    /*End::Watch Video*/

    /*Begin::Settings*/
    Route::get('Settings/Profile', EditProfile::class)->name('UserEditProfile');
    Route::get('Settings/Password', EditPassword::class)->name('UserEditPassword');
    /*End::Settings*/
});
/*End::Auth,User Group*/
