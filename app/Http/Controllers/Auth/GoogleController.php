<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class GoogleController extends Controller
{
    //
     //

   const NAME='GOOGLE';
   protected User $authUser;

   public function __invoke():RedirectResponse{

        try{



        $user = Socialite::driver('google')->user();


         DB::transaction(function() use($user){

          //1- add o token recebido na tabela users->github
             $this->authUser = User::updateOrCreate([
              'email'=>$user->email,

          ],[
              'name'=>$user->name,
              'password'=> Hash::make(Str::random(length:7)),
          ])->load('interest','preference');

        //2 - add a infos adicionais recebidas no profiles
        Profile::updateOrCreate ([
                'user_id' => $this->authUser->id,        ],[
                'provider'=> Self::NAME,
                'provider_user_id'=>$user->id,
                'nickname'=>$user->nickname,
                'avatar'=>$user->avatar,
                'data'=> json_encode($user->user)

        ]);

      },attempts:3);

      Auth::login($this->authUser);//autentica no laravel
    //  dump(auth()->user());

      //

     // dump($user);

      if(is_null( $this->authUser->interest)){

        return redirect()->route('app.interest');
      }


      if(is_null( $this->authUser->preference)){

        return redirect()->route('app.preference');
      }

       return redirect()-route('app.developers');

        } catch (\Exception $exception){
            DB::rollBack();
            dump($exception->getMessage());

        }
    }
}
