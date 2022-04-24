 <div x-data="splash()"{{-- tudo que estiver em x-data'e um compnente AlpineJs --}}
       x-init="initSplash" {{-- carrega a funcao criada --}}
  >

        <div x-ref="slidecontainer" class="absolute top-0 left-0 flex flex-col items-center justify-center w-full min-h-screen duration-1000 transform bg-gradient-to-r from-primary-100 to-secondary-100">
            <div class="flex flex-row items-center justify-center w-full sapce-x-2">
                <img src="{{asset('assets/mstile-310x310.png')}}" alt="logo"/>
            </div>
            <span class="mr-0 text-3xl font-bold text-white"> ADOTE UM DEV</span>
        </div>
        <div class="flex flex-col items-center justify-center w-full min-h-screen">
            <img x-ref="logo" class="duration-1000 transform scale-0" src="{{asset('assets/logo-adote-um-dev_v-doc.svg')}}"/>
        </div>

   </div>


   <script>
       function splash(){//compnente AlpineJs
           return {
               initSplash(){//funcao do compnente do componente AlpineJs
                   document.body.classList.add('overflow-hidden')//esconde o elemento no body
                   this.animate(this.$refs.slidecontainer,['left-full','skew-x-12'],'add',1000,//animacao inicial para esquerda chamada da funcao animate()
                   ()=>this.animate(this.$refs.slidecontainer,['skew-x-12'],'remove',400,//callback Remove a animacao apos ter sido feita
                   ()=>this.animate(this.$refs.logo,['scale-100'],'add',500,//callback outro elemento de animacao na tela
                   setTimeout(()=>window.location.href="/home",2500)//callback de redirecionamento home
                        )
                     )
                   )
               },

               animate(element, classList, type,time,callback){
                   setTimeout(()=>{
                        if(type === 'add'){
                            element.classList.add(...classList)
                        }else{
                            element.classList.remove(...classList)
                        }
                        if(callback){
                            callback()
                        }
              },time ? time : 1000)
           }
        }
     }
   </script>

