<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Http\Controllers\Auth\SocialiteController;


Route::middleware(['web','guest'])->group(function(){
  Route::get('/login', Login::class)->name('login');
  Route::get('/register', Register::class);

  Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
  Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProviderCallback']);
});

Route::middleware(['web','auth'])->group(function(){
  Route::get('/home', Home::class)->name('home');
});