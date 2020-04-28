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
              <div class="col-lg-8">
                <h1  class="titulos-class text-white">{{$Titulo}}</h1>
                <h2 class="sub-titulos-class text-white">Esto es un subtítulo para la página web</h2>
                <p class="parrafo-class text-white"> Aquí estoy escribiendo texto de párrafo para la página web</p>
               
                
                <p><a href="#about-section" class="Boton-Fuente-Grande Boton-Primario-Relleno"> Más información </a></p>
                <p><a href="#about-section" class="Boton-Fuente-Grande Boton-Primario-Sin-Relleno"> Más información </a></p>
                <p><a href="#about-section" class="Boton-Fuente-Grande Boton-Blanco"> Más información </a></p>
                <p><a href="#about-section" class="Boton-Fuente-Chica Boton-Blanco"> Conseguir ahora la promo  de 2 meses gratis </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
       <img class="post-img-slider-size Slider_cabecer_img" style="position: absolute;top: 0;" src="{{$ImagenPortada}}" alt="Software simple de usar para gestionar tu gimnasio, centro de fitness, box de crossfit o entrenamiento funcional"> 
       {{-- <img class="logo-float-easy-socio-portada" :src="empresa.logo_easy_blanco" alt="Easysocio ptograma de gestion de gimasios y academias simple de usar."> --}}
       

    </div>  



@stop

@section('contenido')

  <div  class="site-section" id="about-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title Easy-titulo-seccion ">Software en la nube</h2>
          <p class="Easy-parrafo-seccion">
            <strong>¿Tu objetivo es aumentar tus ventas?, ¿conseguir nuevos clientes?, ¿dar a conocer tus talentos al mundo?, ¿te gustaría convertirte en un candidato muchos más cotizado a la hora de buscar un nuevo trabajo?
            </strong>  
          </p>   

          <p class="Easy-parrafo-seccion">Lo primero que tienes que saber es que tener un página web <strong> te va a ayudar a centralizar toda la información con respecto a ti</strong> va ser como  <strong>tu curriculum vitae pero mostrado de una forma super linda e inteligente</strong> . Podrás incluir por ejemplo <strong>todos tus datos de contacto y redes sociales, podrás contarnos quién eres y en qué eres bueno/a, vas a poder exponer toda tu experiencia como profesional</strong> . 
          </p> 

         




          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/Easysocio/Easysocio-software-para-administrar-gimnasisos-celular.png" alt="Easysocio está en la nuebe y lo puedes usar desde celulares y computadoras. Desde cualquier lugar. ">
          </div>
        </div>
      </div>
    </div>


    

     {{-- Imagen con logo para mostrar por el medio --}}
      <div class="contiene-todo-image-centrada">
        <img src="{{url()}}/imagenes/PaginasPersonalizadas/paginas-webs-mauricio-costanzo-responsive.jpg" class="imagen-medio-de-web">
        <div class="sub-contiene-texto-imagen-medio">
          <div class="contiene-texto-imagen-medio-texto">Tu pagina web será tu carta de presentación ante el mundo.  </div>
          
        </div>
      </div>




    




    

    

   


   

    

   

@stop
