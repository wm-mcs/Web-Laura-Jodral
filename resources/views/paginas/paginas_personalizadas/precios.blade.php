@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/Servicios/laura-joidral-servicios.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/Empresa/Laura-img-tag-social.jpg'/*--}}
{{--*/ $Titulo                = 'Precios | Laura Jodral' /*--}}
{{--*/ $DescriptionEtiqueta   = '' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_precios') /*--}}


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
  @include('paginas.home.vue.vue-instance')
@stop

@section('header')
  @include('paginas.paginas_personalizadas.Header.Header_principal')
@stop

@section('footer')
  @include('paginas.paginas_personalizadas.Footer.Footer_principal')
@stop



@section('portada')
<div class="site-blocks-cover overlay background-primary" id="home-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div style="height: 100vh;" class="row align-items-center justify-content-center">
          <div class="col-10 col-lg-6 p-2 px-lg-5 d-flex flex-column align-items-center  text-center" >
             <h1  class="titulos-class text-white font-secondary mt-lg-5 ">Precios</h1>
             <div class="w-75 p-5 m-0">                  
               <img data-src="{{url()}}/imagenes/Contacto/Laura-Jodral-contacto-terapias-foto-chica.jpg" 
                 class="img-fluid p5 rounded-circle">
             </div>

             <p class="m-0">
              <a href="#intro" class="scroll-to Boton-Fuente-Chico Boton-Blanco"> 
                Ver los precios <i class="fas fa-chevron-right"></i> 
              </a>
             </p>
                
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
@stop

@section('contenido')

  
<div class="site-section background-gris-0" id="intro">
    <div class="container">  
     <div class="row justify-content-center">
       <div class="col-6 col-lg-4 text-center p-3 p-lg-5 background-gris-1">
         <h2 class="sub-titulos-class text-white font-secondary mb-3 p-4 background-primary rounded">Terapia gestalt</h2>
         <p class="mb-2"> <b>1 sesion</b> </p>
         <p class="mb-2"> <i class="fas fa-hourglass-start"></i> Duración 75 minutos </p>
         <p class="m-0">
           Inversión: € 45 
         </p>
       </div>
       <div class="col-6 col-lg-4 text-center p-3 p-lg-5 background-gris-1">
         <h2 class="sub-titulos-class text-white font-secondary mb-3 p-4 background-primary rounded">Coaching Sesión</h2>
         <p class="mb-2"> <b>1 sesion</b> </p>
         <p class="mb-2"> <i class="fas fa-hourglass-start"></i> Duración 60 minutos </p>
         <p class="m-0">
           Inversión: € 70 
         </p>
         
       </div>
       <div class="col-6 col-lg-4 text-center p-3 p-lg-5 background-gris-1">
         <h2 class="sub-titulos-class text-white font-secondary mb-3 p-4 background-primary rounded">Lectura Carta Natal</h2>
         <p class="mb-2"> <b>1 sesion</b> </p>
         <p class="mb-2"> <i class="fas fa-hourglass-start"></i> Duración 1h 30 </p>
         <p class="m-0">
           Inversión: € 80 
         </p>
       </div>
       <div class="col-6 col-lg-4 text-center p-3 p-lg-5 background-gris-2">
         <h2 class="sub-titulos-class text-white font-secondary mb-3 p-4 background-primary rounded">Coaching con PNL</h2>
         <p class="mb-2"> <b>Bono de 4 sesiones</b> </p>
         <p class="mb-2"> <i class="fas fa-hourglass-start"></i> Duración 60 minutos c/u</p>
         <p class="m-1">
           Inversión: € 220 
         </p>
         <p class="m-1 color-text-success">
          <small >Ahorro de € 60 </small> 
         </p>
         <p class="m-0 color-text-gris">
          <small style=" text-decoration:line-through;"> Si las comprás de a una sería €280  </small> 
         </p>
       </div>
        <div class="col-6 col-lg-4 text-center p-3 p-lg-5 background-gris-2">
         <h2 class="sub-titulos-class text-white font-secondary mb-3 p-4 background-primary rounded">Coaching con PNL</h2>
         <p class="mb-2"> <b>Bono de 8 sesiones</b> </p>
         <p class="mb-2"> <i class="fas fa-hourglass-start"></i> Duración 60 minutos c/u</p>
         <p class="m-1">
           Inversión: € 399 
         </p>
         <p class="m-1 color-text-success">
          <small>Ahorro de € 161 </small> 
         </p>
         <p class="m-0 color-text-gris">
          <small style=" text-decoration:line-through;"> Si las comprás de a una sería €560 </small> 
         </p>
       </div>
       
       <div class="col-6 col-lg-4 text-center p-3 p-lg-5 background-gris-3">
         <h2 class="sub-titulos-class text-white font-secondary mb-3 p-4 background-primary rounded">Primera sesión gratuita</h2>
         <p class="mb-2"> <b>1 sesion</b> </p>
         <p class="mb-2"> <i class="fas fa-hourglass-start"></i> Duración 45 minutos </p>
         <p class="m-1">
           Inversión: € 0
         </p>
         <p class="m-0 color-text-gris">
           Es gratis
         </p>
       </div>
       
       <div class="mt-5"></div>
       <div class="col-11 col-lg-6 my-5">
        <a href="{{route('get_pagina_contacto','-para-coordinar-llamada')}}" class="Boton-Primario-Sin-Relleno Boton-Fuente-Chico">Coordinar ahora mismo <i class="fas fa-chevron-right"></i></a>  

        <p class="text-center mt-3">
          <small>También puedes escribirme por  <a  :href="empresa.link_whatsapp_send">Whatsapp</a> </small>
        </p>     
       </div>
     </div>



    </div>
</div>



      




    




    

    

   


   

    

   

@stop