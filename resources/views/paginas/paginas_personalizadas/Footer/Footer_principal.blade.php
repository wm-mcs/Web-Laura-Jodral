<footer class="site-section background-gris-3 ">
      <div class="container">


        
        <div class="row">

          {{-- P r i m e r    b l o q u e   --}}
          <div class="col-md-3 p-4">
            <h3 class="footer-titulo-columna mb-5 text-color-primary text-bold">@{{empresa.name}}</h3>
            <p  v-if="se_muestra(empresa.home_footer_sobre_mi)">@{{empresa.home_footer_sobre_mi}}</p>           
          </div>

          {{-- S e g u n d o   B l o q u e     --}}  
          <div class="col-md-3 p-4">
            <h3 class="footer-titulo-columna mb-5 text-color-primary text-bold">Rutas de interés</h3>
            

             
               <p>
                 <a href="#contact-section" >Contacto</a>
               </p>
                

               @if(Auth::guest())
               <p>
                 <a href="{{route('auth_login_get')}}" >Iniciar sesión</a>
               </p>
                
               @else
               <p>
                 <a href="{{route('get_datos_corporativos')}}" >Administrar</a>
               </p>
               <p>
                 <a href="{{route('logout')}}" >Salir</a>
               </p>
                
                
               @endif
            
          </div>   


          {{-- T e r c e r   B l o q u e     --}}  
          <div class="col-md-3 p-4">
            <h3 class="footer-titulo-columna mb-5 text-color-primary text-bold">Mis datos</h3>
                             
              <p  v-if="se_muestra(empresa.telefono)"  > 
                 <i class="fas fa-phone-square"></i>   @{{empresa.telefono}}
              </p>
              <p  v-if="se_muestra(empresa.celular)"   > 
                 <i class="fas fa-mobile-alt"></i>     @{{empresa.celular}} 
              </p>
              <p  v-if="se_muestra(empresa.direccion)"  >
                 <i class="fas fa-map-marker-alt"></i> @{{empresa.direccion}}
              </p>
              <p  v-if="se_muestra(empresa.horarios)"  > 
                 <i class="far fa-clock"></i>          @{{empresa.horarios}}
              </p>
              <p  v-if="se_muestra(empresa.email)" >    
                 <i class="far fa-envelope"></i>       @{{empresa.email}}
              </p>
            
          </div> 
        
               
             
          
          {{-- C u a r t o   B l o q u e     --}}
          <div class="col-md-3 p-4">
            <h3 class="footer-titulo-columna mb-5 text-color-primary text-bold">Sígueme</h3>
            <p v-if="se_muestra(empresa.twitter_url)"  class="">
             <a :href="empresa.twitter_url">
               <span class="icon-twitter mr-2"></span> Twitter
             </a> 
            </p>
            <p v-if="se_muestra(empresa.facebook_url)"  class="">
             <a :href="empresa.facebook_url">
               <span class="icon-facebook mr-2"></span> Facebook
             </a>
            </p>
            <p v-if=" se_muestra(empresa.instagram_url)"  class="">
             <a :href="empresa.instagram_url">
               <span class="icon-instagram mr-2"></span> Instagram
             </a>
            </p>
            <p v-if="se_muestra(empresa.youtube_url)"  class="">
             <a :href="empresa.youtube_url">
               <span class="icon-youtube mr-2"></span> Youtube
             </a>
            </p>
            <p v-if="se_muestra(empresa.linkedin_url)"  class="">
             <a :href="empresa.linkedin_url">
               <span class="icon-linkedin mr-2"></span> Linkedin
             </a>
            </p>
            <p v-if="se_muestra(empresa.Whatsapp_cel)" class=""> 
             <a :href="empresa.link_whatsapp_send" >
               <i class="fab fa-whatsapp mr-2"></i> Whatsapp
             </a>
            </p>
          </div>
        </div>

        @yield('iconos-compartir')
       
      </div>
    </footer>