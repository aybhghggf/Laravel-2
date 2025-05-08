<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'Home'])->name('index.home');

Route::get('/information',[InfoController::class,'info'])->name('info.info');

Route::get('/Profile',[ProfileController::class,'Profile'])->name('Profile.profile');

Route::get('/profiles',[ProfilesController::class,'TousLesProfiles'])->name('T.profiles');
