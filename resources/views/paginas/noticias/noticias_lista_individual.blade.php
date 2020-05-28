<div class="col-md-6 col-lg-4 mb-4">
            <div class="servicio_lista service">
              <a href="{{$Blog->route}}">
                <img src="{{$Blog->url_img_portada}}" alt="{{$Blog->descripcion_breve}}" class="servicio_lista_imagen">
              </a>              
              <div class="p-3 mt-2">
                <h3 class="sub-titulos-class text-color-primary font-secondary mb-2">
                  <a href="$Blog->route">
                    {{$Blog->name}}
                  </a>                
                </h3>
                <p class="color-text-gris mb-2 ">
                  {{$Blog->descripcion_breve}}
                </p>
                <p>
                  <a  href="{{$Blog->route}}"> Leer más  <i class="fas fa-chevron-right"></i></a>
                </p>                
              </div>
            </div>
          </div>