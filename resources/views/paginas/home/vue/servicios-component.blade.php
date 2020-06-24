Vue.component('servicios-component' ,
{
 
data:function(){
    return {
      servicios: {!! json_encode($Servicios) !!}
    }
}, 

methods:{



},
computed:{




},
template:'
<div class="site-section background-gris-1" id="intro">
    <div class="container">          
      <div class="row justify-content-center">
       
       <servicio-ista :servicio="servicios_mostrar" v-for="servicios_mostrar in servicios" :key="servicios_mostrar.name"></servicio-ista>

       <p class="col-11 col-lg-10 mt-5">
         <a  class="Boton-Fuente-Chico Boton-Primario-Sin-Relleno" href="{{route('get_pagina_contacto','-por-los-servicios-de-laura')}}">Coordinar una charla con Laura ahora mismo <i class="fas fa-chevron-right"></i>
         </a>
       </p>
       
        
      </div> 
      
    </div>
</div>
'



});


Vue.component('servicio-ista' ,
{
 
props:['servicio'], 
data:function(){
    return {
      muestra:false
    }
}, 

methods:{

  mostrar:function()
  {
    if(this.muestra == true)
    {
     this.muestra = false;
    }
    else
    {
     this.muestra =  true;
    }
  }
},
computed:{

descripcion:function(){

  if(this.muestra == false)
  {
    return this.servicio.descripcion.slice(0,150) + '...';
  }

  return this.servicio.descripcion;
  
}


},
template:'
<div class="col-md-6 col-lg-4 mb-4">
  <div class="servicio_lista service d-flex flex-column align-items-center background-transparent ">              
    <img :src="servicio.img" alt="" class="imagen-servicios-chica my-4">
    <div class="p-3 mt-0">
      <h3 class="sub-titulos-class text-color-primary font-secondary mb-2">
         <b>@{{servicio.name}}</b>
      </h3>
      <p class="color-text-gris mb-2">
        @{{descripcion}}
      </p> 
      <p v-if="!muestra" v-on:click="mostrar" class="py-3 servicio-mostrar-mas-o-menos">Mostrar más <i class="fas fa-chevron-down"></i></p>  
      <p v-else v-on:click="mostrar" class="py-3 servicio-mostrar-mas-o-menos">Mostrar menos <i class="fas fa-chevron-up"></i></p>                            
    </div>
  </div>
</div>
'




});