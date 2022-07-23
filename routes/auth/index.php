<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Logout;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Auth\VerifyEmail;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\UserRegister;

/*Begin::Auth Routes*/

Route::get('UserRegister', UserRegister::class)
    ->name('UserRegister');


Route::get('/login', Login::class)
    ->name('login');

Route::get('logout', Logout::class)
    ->name('logout');

Route::get('/login/forgot-password', ForgotPassword::class)
    ->name('forgot-password');

Route::get('/reset-password/{id}', ResetPassword::class)
    ->name('reset-password')->middleware('signed');

Route::get('VerifyEmail', VerifyEmail::class)
    ->name('verification.notice')
    ->middleware('auth');

Route::get('Verify', Verify::class)
    ->name('verification.verify')
    ->middleware('auth');

/*End::Auth Routes*/
