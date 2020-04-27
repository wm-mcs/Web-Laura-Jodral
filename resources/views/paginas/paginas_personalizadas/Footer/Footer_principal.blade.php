<footer class="site-section bg-light footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <h3 class="footer-title">@{{empresa.name}}</h3>
            <p  v-if="se_muestra(empresa.home_footer_sobre_mi)">@{{empresa.home_footer_sobre_mi}}</p>
            <p v-if="se_muestra(empresa.direccion_empresa)"><span class="d-inline-block d-md-block">@{{empresa.direccion_empresa}}</p>
          </div>
          <div class="col-md-6 mx-auto">
            <div class="row">
             
              <div class="col-lg-6">
                <h3 class="footer-title">Rutas de interés</h3>
                <ul class="list-unstyled">

                  @yield('rutas_de_interes')
                  
                  <li><a href="#contact-section" >Contacto</a></li>
                   @if(Auth::guest())
                    <li><a href="{{route('auth_login_get')}}" >Iniciar sesión</a></li>

                   @else
                    <li><a href="{{route('get_datos_corporativos')}}" >Administrar</a></li>
                    <li><a href="{{route('logout')}}" >Salir</a></li>
                   @endif
                </ul>
              </div>   



               <div class="col-lg-6">
                <h3 class="footer-title">Datos</h3>
                <ul class="list-unstyled">

                  
                  <li v-if="se_muestra(empresa.telefono)"><a  href="#" ><i class="fas fa-phone-square"></i>  @{{empresa.telefono}}</a></li>
                  <li v-if="se_muestra(empresa.celular)" ><a  href="#"  ><i class="fas fa-mobile-alt"></i> @{{empresa.celular}} </a></li>
                  <li v-if="se_muestra(empresa.direccion)"><a  href="#" ><i class="fas fa-map-marker-alt"></i> @{{empresa.direccion}}</a></li>
                  <li v-if="se_muestra(empresa.horarios)"><a  href="#" ><i class="far fa-clock"></i>@{{empresa.horarios}}</a></li>
                  <li v-if="se_muestra(empresa.email)"><a  href="#" ><i class="far fa-envelope"></i> @{{empresa.email}}</a></li>



                </ul>
              </div> 
        
               
             
            </div>
          </div>
          
          <div class="col-md-3">
            <h3 class="footer-title">Sígueme</h3>
            <a v-if="se_muestra(empresa.twitter_url)" :href="empresa.twitter_url" class="social-circle p-2"><span class="icon-twitter"></span></a>
            <a v-if="se_muestra(empresa.facebook_url)" :href="empresa.facebook_url" class="social-circle p-2"><span class="icon-facebook"></span></a>
            <a v-if=" se_muestra(empresa.instagram_url)" :href="empresa.instagram_url" class="social-circle p-2"><span class="icon-instagram"></span></a>
            <a v-if="se_muestra(empresa.youtube_url)" :href="empresa.youtube_url" class="social-circle p-2"><span class="icon-youtube"></span></a>
            <a v-if="se_muestra(empresa.linkedin_url)" :href="empresa.linkedin_url" class="social-circle p-2"><span class="icon-linkedin"></span></a>
            <a v-if="se_muestra(empresa.Whatsapp_cel)" :href="empresa.link_whatsapp_send" class="social-circle p-2"> <i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
        @yield('iconos-compartir')
       
      </div>
    </footer>