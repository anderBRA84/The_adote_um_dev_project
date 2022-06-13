<?php

if(!function_exists('userIsDeveloper')){

    function userIsDeveloper(){

        $profile = auth()->user()?->profile;

        if($profile?->provider === 'GITHUB'){
            return true;
        }
        return false;
    }

}
