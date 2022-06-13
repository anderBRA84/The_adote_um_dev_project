<?php




it('checks if home page is working')
    ->get('/')
    ->assertOk();

it('Checks if SplashScreen compnent was rendered', function(){

   $this-> get('/')->assertSeeLivewire('components.splash-screen');



});
