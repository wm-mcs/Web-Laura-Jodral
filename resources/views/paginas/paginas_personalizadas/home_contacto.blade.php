<div  class="site-section background_img img_contacto-home " id="contacto_home">
  <div class="container">
    <div class="row align-items-center justify-content-center justify-content-lg-end">
      <div class="col-lg-6">
        
        <h3 class="titulos-class color-text-primary mb-1">Contáctate ahora</h3>
        <p class="color-text-gris parrafo-class mb-4">Para contactarte rellenar el formulario de aqui abajo <i class="fas fa-hand-point-down"></i></p>
        <contacto-component :empresa="empresa" :color="variables.input_color_primary" inline-template>
          @include('paginas.home.vue.Contacto.Contacto_comun')
        </contacto-component>
      </div>
    </div>
  </div>
</div>