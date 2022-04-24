<div>
    <div class=" absolute top-0 left-0 transform duration-1000 flex flex-col items-center justify-center min-h-screen w-full bg-gradient-to-r from-primary-100 to-secondary-100">

        <div class="flex flex-1 flex-col items-center justify-end ext-2xl px-10">

                <div class="flex flex-row space-x-2 items-center justify-end text-2xl p-4 mb-24">
                    <img class=""src="{{asset('assets/mstile-150x150.png')}}"alt="logo"/>
                    <span class="text-white  font-bold"> ADOTE UM DEV</span>
                </div>

                <p class="text-center text-white text-xs">
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Illo optio similique
                    suscipit perferendis. Nihil velit deleniti
                    impedit modi consequuntur temporibus ab provident,
                    debitis maxime dicta,
                    iste ipsum tempore atque rem.
                </p>

                <button wire:click="loginAsDev"

                    class=" flex flex-row space-x-2 justify-center items-center bg-white p-4 text-grey-100 mt-6 w-full rounded-full font-bold transform duration-150 active:scale-95 ">
                   <img src="{{asset('assets/GitHub-Mark-32px.png')}}" alt="logoBtn1">
                    <span>Entrar como Dev</span>
                </button>

                <button wire:click="loginAsRecruiter"
                class="flex flex-row space-x-2 justify-center items-center bg-white p-4 text-grey-100 mt-4 w-full rounded-full mb-8 font-bold transform duration-150 active:scale-95 ">
                    <img src="{{asset('assets/Google__G__Logo.svg')}}" alt="logoBtn2">
                    <span> Entrar como Recrutador</span>
                </button>

        </div>
    </div>
</div>

