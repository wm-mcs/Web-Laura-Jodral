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
      <div class="row">
       
       <servicio-ista :servicio="servicios_mostrar" v-for="servicios_mostrar in servicios" :key="servicios_mostrar.name"></servicio-ista>
        
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
      
    }
}, 

methods:{



},
computed:{




},
template:'
<div class="col-md-6 col-lg-4 mb-4">
  <div class="servicio_lista service d-flex flex-column align-items-center background-transparent ">              
    <img :src="servicio.img" alt="" class="imagen-servicios-chica my-4">
    <div class="p-3 mt-0">
      <h3 class="sub-titulos-class text-color-primary font-secondary mb-2">
         <b>@{{servicio.name}}</b>
      </h3>
      <p class="color-text-gris">
        @{{servicio.descripcion}}
      </p>                               
    </div>
  </div>
</div>
'




});