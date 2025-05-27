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

Route::get('/profiles/{id}', [ProfilesController::class, 'AfficherUnProfile'])->name('profiles.show');

Route::post('/store',[ProfilesController::class,'store'])->name('create');

Route::get('/Login',[ProfileController::class,'show'])->name('Login.show');

Route::post('/Login',[ProfileController::class,'Login'])->name('Login');

Route::post('/Logout',[ProfileController::class,'Logout'])->name( 'Logout');

Route::delete('/delete/{id}', [ProfilesController::class, 'Delete'])->name('profiles.delete');

Route::get('edit/{id}', [ProfileController::class, 'ShowUpdate'])->name('update.show');

Route::put('edit{id}',[ProfileController::class,'Update'])->name('edit.update');