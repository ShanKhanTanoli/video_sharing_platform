<?php

use Illuminate\Support\Facades\Route;

/*Begin::Dashboard*/
use App\Http\Livewire\Admin\Dashboard\Index as AdminDashboard;
/*End::Dashboard*/


/*Begin::Users*/
use App\Http\Livewire\Admin\Dashboard\Users\Index as Users;
use App\Http\Livewire\Admin\Dashboard\Users\Add\Index as AddUser;
use App\Http\Livewire\Admin\Dashboard\Users\Edit\Index as EditUser;
use App\Http\Livewire\Admin\Dashboard\Users\UpdatePassword\Index as UpdateUserPassword;
/*End::Users*/

/*Begin::Videos*/
use App\Http\Livewire\Admin\Dashboard\Videos\Index as Videos;
use App\Http\Livewire\Admin\Dashboard\Videos\Add\Index as AddVideo;
use App\Http\Livewire\Admin\Dashboard\Videos\Edit\Index as EditVideo;
/*End::Videos*/


/*Begin::Settings*/
use App\Http\Livewire\Admin\Dashboard\Settings\Profile\Index as EditProfile;
use App\Http\Livewire\Admin\Dashboard\Settings\Password\Index as EditPassword;
/*End::Settings*/

/*Begin::Auth,Admin Group*/

Route::middleware(['auth', 'AdminMiddleware'])->prefix('Admin')->group(function () {

    /*Begin::Dashboard*/
    Route::get('Dashboard', AdminDashboard::class)
        ->name('AdminDashboard');
    /*End::Dashboard*/

    /*Begin::Users*/
    Route::get('Users', Users::class)
        ->name('AdminUsers');

    Route::get('AddUser', AddUser::class)
        ->name('AdminAddUser');


    Route::get('EditUser/{slug}', EditUser::class)
        ->name('AdminEditUser');

    Route::get('UpdateUser/{slug}/Password', UpdateUserPassword::class)
        ->name('AdminUpdateUserPassword');
    /*End::Users*/


    /*Begin::Videos*/

    Route::get('Videos', Videos::class)
        ->name('AdminVideos');

    Route::get('AddVideo', AddVideo::class)
        ->name('AdminAddVideo');


    Route::get('EditVideo/{slug}', EditVideo::class)
        ->name('AdminEditVideo');

    /*End::Videos*/


    /*Begin::Settings*/
    Route::get('Settings/Profile', EditProfile::class)
        ->name('AdminEditProfile');

    Route::get('Settings/Password', EditPassword::class)
        ->name('AdminEditPassword');
    /*End::Settings*/
});
/*End::Auth,Admin Group*/
