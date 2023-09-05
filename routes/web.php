<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\JobsController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\StartsidaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivatServiceController;
use App\Http\Controllers\SendingMailController;
use App\Http\Controllers\LinkController;

Route::get('/', function () {
    return view('frontend.services.index');
});

Auth::routes();
Route::resource('startsida', StartsidaController::class);
Route::resource('abouts', AboutController::class);
Route::resource('blogs', BlogController::class);
Route::resource('jobs', JobsController::class);
Route::resource('services', ServiceController::class);
Route::resource('applications', ApplicationController::class);
Route::resource('contacts', ContactController::class);
Route::resource('privateservices', PrivatServiceController::class);
Route::resource('logos', LogoController::class);
Route::resource('sending', SendingMailController::class);
Route::resource('links', LinkController::class);
//  Route::get('/frontend/pages/gdpr', [LinkController::class,'index'])->name('gdpr');
//  Route::get('/frontend/pages/verksamhet', [LinkController::class,'verksamhet'])->name('verksamhet');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
