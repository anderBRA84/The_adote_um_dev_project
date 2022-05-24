<div>
    <div class="absolute top-0 left-0 flex flex-col items-center justify-center w-full min-h-screen duration-1000 transform bg-gradient-to-r from-primary-100 to-secondary-100">

        <div class="flex flex-col items-center justify-end flex-1 px-10 ext-2xl">

                <div class="flex flex-row items-center justify-end p-4 mb-24 space-x-2 text-2xl">
                    <img class=""src="{{asset('assets/mstile-150x150.png')}}"alt="logo"/>
                    <span class="font-bold text-white"> ADOTE UM DEV</span>
                </div>

                <p class="text-xs text-center text-white">
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Illo optio similique
                    suscipit perferendis. Nihil velit deleniti
                    impedit modi consequuntur temporibus ab provident,
                    debitis maxime dicta,
                    iste ipsum tempore atque rem.
                </p>

                <button wire:click="loginWithGithub"

                    class="flex flex-row items-center justify-center w-full p-4 mt-6 space-x-2 font-bold duration-150 transform bg-white rounded-full text-grey-100 active:scale-95">
                   <img src="{{asset('assets/GitHub-Mark-32px.png')}}" alt="logoBtn1">
                    <span>Entrar como Dev</span>
                </button>

                <button wire:click="loginWithGoogle"
                class="flex flex-row items-center justify-center w-full p-4 mt-4 mb-8 space-x-2 font-bold duration-150 transform bg-white rounded-full text-grey-100 active:scale-95 ">
                    <img src="{{asset('assets/Google__G__Logo.svg')}}" alt="logoBtn2">
                    <span> Entrar como Recrutador</span>
                </button>

        </div>
    </div>
</div>

