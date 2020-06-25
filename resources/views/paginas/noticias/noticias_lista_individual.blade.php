<div class="col-md-6 col-lg-4 mb-4">
            <div class="servicio_lista service">
              <a href="{{$Route}}">
                <img data-src="{{$Entidad->url_img_portada}}" alt="{{$Entidad->descripcion_breve}}" class="servicio_lista_imagen">
              </a>              
              <div class="p-3 mt-2">
                <h3 class="sub-titulos-class text-color-primary font-secondary mb-2">
                  <a href="{{$Route}}">
                    {{$Entidad->name}}
                  </a>                
                </h3>
                <p class="color-text-gris mb-2 ">
                  {{$Entidad->descripcion_breve}}
                </p>
                <p>
                  <a  href="{{$Route}}"> Leer más  <i class="fas fa-chevron-right"></i></a>
                </p>                
              </div>
            </div>
          </div>