@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/Portadas/laura-jodral-home-imagen-principal.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/Socios/easy-socio-el-software-para-administrar-gimnasios-academias-de-baile-institutos-de-ingles-y-mucho-más.jpg'/*--}}
{{--*/ $Titulo                = 'Laura Jodral' /*--}}
{{--*/ $DescriptionEtiqueta   = '' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_home') /*--}}


@section('favicon')
<link rel="shortcut icon" href="{{ asset('imagenes/favicon-easy.ico') }}"> 
@stop

@section('og-tags')
 <meta property="og:type"               content="website" />
 <meta property="og:title"              content="{{ $Titulo}} " />
 <meta property="og:description"        content="{{$DescriptionEtiqueta}}" />
 <meta property="og:image"              content="{{$ImagenParaTaG }}" />
 <meta property="og:image:secure_url"   content="{{$ImagenParaTaG }}" /> 
 <meta property="og:image:width"        content="250">
 <meta property="og:image:height"       content="250">
@stop 

@section('pixcel-facebook')
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '211354400244020');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=211354400244020&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

@stop

@section('data-estructurada')

 <script type="application/ld+json">
        {
         "@context": "http://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement":
         [
          {
           "@type": "ListItem",
           "position": 1,
           "item":
           {
            "@id": "{{$UrlDeLaPagina}}",
            "name": "{{$Titulo}}"
            }
          }          
         ]
        }
</script>


@stop




@section('title')
   {{$Titulo}}
@stop


@section('MetaContent')
      {{$DescriptionEtiqueta}}
@stop

@section('MetaRobot')
 index,follow
@stop

@section('palabras-claves')
{{$PalabrasClaves}}
@stop


@section('vue')


  
  @include('paginas.home.vue.contacto-component')
  @include('paginas.home.vue.blog-list-component')
  @include('paginas.home.vue.vue-instance')
@stop

@section('header')
	@include('paginas.paginas_personalizadas.Header.Header_principal')
@stop

@section('footer')
	@include('paginas.paginas_personalizadas.Footer.Footer_principal')
@stop



@section('portada')

    <div class="site-blocks-cover overlay bg-light" id="home-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-lg-8 " style="max-width: 550px;">
                <h1  class="titulos-class text-white">Aprende como tomar las riendas de tu vida</h1>
                <h2 class="sub-titulos-class text-white no-mostrar-en-mobil">Mejora tus conflictos emocionales, miedos, autoestima e inseguridad.
</h2>
                <p class="parrafo-class text-white"> Soy Laura Jodral y estoy aquí para acompañarte en tu proceso de desarrollo personal.</p>
               
                
           
                <p><a href="#sobre-mi" class="Boton-Fuente-Chico Boton-Blanco"> Aprende como ahora mismo <i class="fas fa-chevron-right"></i> </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
       <img class="post-img-slider-size Slider_cabecer_img" style="position: absolute;top: 0;" src="{{$ImagenPortada}}" alt="Laura Jodral portada."> 
       {{-- <img class="logo-float-easy-socio-portada" :src="empresa.logo_easy_blanco" alt="Easysocio ptograma de gestion de gimasios y academias simple de usar."> --}}
       

    </div>  



@stop

@section('contenido')

  
      <div class="site-section background-gris-1">
        <div class="container">
          
          <h3 class="sub-titulos-class text-center text-color-primary font-italic mb-3">
            "Ama la vida que tienes para poder vivir la vida que amas".
          </h3>    


          <p class="text-center text-color-primary m-0">            
            Confío en cada uno <strong>puede llegar a ser la mejor versión de sí mismo</strong>. Estoy aquí para enseñarte a tomar las riendas de tu vida. 
          </p>   
          
        </div>
      </div>
      

    <div  class="site-section background_img background_img_fixed img_Laura-Jodral-Campo" id="">
      <div class="container ">
        <div class="row d-flex flex-row justify-content-start">
          <div class="col-lg-6 ">
          <h2 class="h2-titulos-class mb-4 text-color-primary">¿Qué haré por tí?</h2>
          <p class="parrafo-class mb-5"> Como facilitadora del desarrollo personal ,detectaré las áreas de dificultad que te impiden crecer personal y profesionalmente  y te asistiré en tus procesos de aprendizaje y cambio para conseguirlo.  Del mismo modo que si uno se adentra en un lugar desconocido a oscuras sintiéndose desorientado sin saber por dónde ir en ese momento, si tuviese una linterna a mano le ayudaría para orientarse, hay momentos en la vida en que gracias a esa ‘linterna’ podemos recorrer el camino que deseamos y decidimos realizar.
          </p>   

           <p class="parrafo-class m-0">
        
       Confío en cada uno <strong>puede llegar a ser la mejor versión de sí mismo</strong>  y la experiencia me ha mostrado que la gran mayoría de las personas viven distanciadas de sí mismas caminando por la vida como medianamente pueden sin ser quien realmente son con todo su ser y sin experimentar todas las potencialidades que tienen para manifestar en este mundo lo cual acarrea una serie de conflictos internos que si se dedicasen un poquito de tiempo para adentrarse y mirarse a  sí mismos podrían disfrutar de una vida más plena,  y <strong>que mejor momento que ahora, en esta Vida, en la que aún puedes hacer algo por ti</strong> .
      </p> 


          </div>
          
        </div>
      </div>
    </div>

      @include('paginas.paginas_personalizadas.home_sobre_mi')

      {{-- L i b r o s --}}
      <div class="background_img background_img_fixed img_home_primera"> </div>

      
      {{-- S e r v i c i o s  --}}
      @include('paginas.paginas_personalizadas.home_servicios')
      

      {{-- C o n t a c t o  --}}
      @include('paginas.paginas_personalizadas.home_contacto')




    




    

    

   


   

    

   

@stop
