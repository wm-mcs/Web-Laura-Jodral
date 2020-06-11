<div v-if="!se_envio" class="container">
  
  <div action="#" class="form">
    <div class="row mb-4">      
      <div class="form-group col-lg-6">
        <input v-model="data_mensaje.name" type="text" :class="classImput" placeholder="Nombre">
      </div>
      <div class="form-group col-lg-6">
        <input v-model="data_mensaje.email" type="email" :class="classImput" placeholder="Email ">
      </div>
    </div>
    <div class="row mb-4 justify-content-end">

      <p class="col-12 text-bold -text-primary mb-4">¿Qué tema quieres tratar?</p>

      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="checkbox" name="" value="Quiero aprender a controlar mis emociones" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Quiero aprender a controlar mis emociones</p>
      </div>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="checkbox" name="" value="Quiero encontrar mi propósito en esta vida" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Quiero encontrar mi propósito en esta vida</p>
      </div>
       <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="checkbox" name="" value="Quiero trabajar mi autoestima" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Quiero trabajar mi autoestima</p>
      </div>
      <div class="row align-items-center  col-12 mb-2">
        <input class="m-0 mr-2" type="checkbox" name="" value="Quiero trabajar mi inseguridad" v-model="data_mensaje.que_necesitas">
        <p class="color-text-gris m-0">Quiero trabajar mi inseguridad</p>
      </div>
      
      
      
      
      
    </div>

   
   
    <div class="row mb-4">
      <div class="form-group col-12">
        <textarea v-model="data_mensaje.mensaje" cols="30" rows="2" :class="classImput" placeholder="Mensaje"></textarea>
      </div>
    </div>

    <div class="row">

      <div class="col-md-6" v-if="errores" >
        <div :class="classTextColor" v-for="error in errores">@{{error}}</div>
      </div>

      <div class="col-md-12">
        <div v-if="cargando" class="flex-column align-items-center">
          <div class="cssload-tube-tunnel" :class="classCargadorColor"></div>
        </div>
        <div v-else v-on:click="enviarMensaje" :class="classBoton" value="Enviar mensaje">
          Enviar solicitud ahora
        </div>
      </div> 
      <div>
       
      </div>  

    </div>
    <div class="row">
       <div class="col-md-12 text-center parrafo-class p-3 mb-4 "  >
        <p class="text-center color-text-gris">
          Te responderé en menos de 24hs
        </p>
        
      </div>
      
    </div>
    
  </div>
</div>
<div v-else class="section-title text-center mb-5" :class="classTextColor">
  <h2 class="section-title text-center mb-5" :class="classTextColor" >@{{mensaje_se_envio}}</h2>
  <a href="{{route('get_home')}}" class="Boton-Fuente-Chica Boton-Primario-Relleno mb-4 mt-4">Seguir explorando servicios de crecimiento personal</a>
</div>