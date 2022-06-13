<?php

use App\Http\Controllers\Auth\SocialiteCallbackController;
use App\Http\Livewire\Components\Chat;
use App\Http\Livewire\Components\ChatList;
use App\Http\Livewire\Components\DevelopersScreen;
use App\Http\Livewire\Components\HomeScreen;
use App\Http\Livewire\Components\InterestScreen;
use App\Http\Livewire\Components\KnowledgeScreen;
use App\Http\Livewire\Components\ProfileScreen;
use App\Http\Livewire\Components\SplashScreen;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
//use App\Http\Controllers\Auth\GoogleController;
//use App\Http\Controllers\Auth\GithubController;

    // rota de compoentes livewire onde os usuarios acessam sem estar autenticados
    Route::group(['namespace'=>'App\Http\Livewire\Components'],function(){
        Route::get( '/',SplashScreen::class)->name('app.splash');
        Route::get( '/home',HomeScreen::class)->name('app.home');
    });

    //rotas acessadas somente se o usuario estiver autenticado
    // tambem sao componentes do livewire
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/interest/{type?}', InterestScreen::class)->name('app.interest');
        //Route::get('conhecimentos/{type?}', KnowledgeScreen::class)->name('app.knowledge');
        Route::get('/developers', DevelopersScreen::class)->name('app.developers');
        Route::get('/knowledge/{type?}', KnowledgeScreen::class)->name('app.knowledge');
        Route::get('profile', ProfileScreen::class)->name('app.profile');
        Route::get('chat-list', ChatList::class)->name('app.chat-list');
        Route::get('chat/{user}', Chat::class)->name('app.chat');
    });
    //acessando essa rota cai em Auth/SocialiteCallbackController
    // quando o usuario realiza o login acessa o componente HomeScreen do livewire
    Route::group(['prefix' => 'auth', 'as' => 'socialite.'], function () {
        Route::get('redirect/{driver}', function (string $driver) {
            return Socialite::driver($driver)->redirect();
        })->name('redirect')->middleware('checkIfAutoLogin');

        Route::get('callback/{driver}', SocialiteCallbackController::class)->name('callback');
    });
