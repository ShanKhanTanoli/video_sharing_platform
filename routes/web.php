<?php


use Illuminate\Support\Facades\Route;

/*Begin::Mian Homepage*/
use App\Http\Livewire\Home\Index as Home;
/*End::Main Homepage*/

//Auth::routes();



Route::get('debug', function () {
    return 'hello';
});


Route::get('/home', Home::class)->middleware(['auth'])
->middleware(['auth'])->name('home');


Route::get('/', Home::class)->middleware(['auth'])
->middleware(['auth'])->name('main');

/*Begin::Admin Routes*/
include('admin/index.php');
/*End::Admin Routes*/

/*Begin::User Routes*/
include('user/index.php');
/*End::User Routes*/


/*Begin::Auth Routes*/
include('auth/index.php');
/*End::Auth Routes*/
