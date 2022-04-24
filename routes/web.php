<?php


use App\Http\Livewire\Components\SplashScreen;
use App\Http\Livewire\Components\HomeScreen;
use App\Http\Livewire\Components\InterestScreen;
use App\Http\Livewire\Components\PreferenceScreen;
use App\Http\Livewire\Components\DevelopersScreen;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\GithubController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get( '/',SplashScreen::class)->name('app.splash');
Route::get( '/home',HomeScreen::class)->name('app.home');
Route::get( '/interest',InterestScreen::class)->name('app.interest');
Route::get( '/preference',PreferenceScreen::class)->name('app.preference');
Route::get( '/developers',DevelopersScreen::class)->name('app.developers');

Route::get('/auth/redirectGithub', function () {
    return Socialite::driver('github')->redirect();
})->name('socialite.redirect-github');

Route::get('/auth/github', GithubController::class);

Route::get('/auth/redirectGoogle', function () {
    return Socialite::driver('Google')->redirect();
})->name('socialite.redirect-google');

Route::get('/auth/google', GoogleController::class);
