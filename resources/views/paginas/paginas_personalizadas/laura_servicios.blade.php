@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/Servicios/laura-joidral-servicios.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Contacto/Laura-Jodral-contacto-terapias-foto-chica.jpg'/*--}}
{{--*/ $Titulo                = 'Servicios | Laura Jodral' /*--}}
{{--*/ $DescriptionEtiqueta   = '' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_pagina_servicios') /*--}}


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


  
  @include('paginas.home.vue.contacto-component')
  @include('paginas.home.vue.blog-list-component')
  @include('paginas.home.vue.vue-instance')
@stop

@section('header')
	@include('paginas.paginas_personalizadas.Header.Header_principal')
@stop

@section('footer')
	{{-- @include('paginas.paginas_personalizadas.Footer.Footer_principal') --}}
@stop



@section('portada')

    <div class="site-blocks-cover overlay bg-light" id="home-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-6 col-lg-6 p-2 p-lg-5 background-primary" >
                
                  <h1  class="titulos-class text-white font-secondary">Servicios</h1>
                  <p class="parrafo-class text-white"> 
                   Imagina ser capaz de lograr todo lo que te propones y conocer cómo funciona tu mente y emociones.
                  </p>     
                  <p><a href="#intro" class="scroll-to Boton-Fuente-Chico Boton-Blanco"> Explora las herramientas que te lo permitirán <i class="fas fa-chevron-right"></i> </a></p>          
               
              </div>
            </div>
          </div>
        </div>
      </div>
      
       <img class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" src="{{$ImagenPortada}}" alt="Laura Jodral portada."> 
       {{-- <img class="logo-float-easy-socio-portada" :src="empresa.logo_easy_blanco" alt="Easysocio ptograma de gestion de gimasios y academias simple de usar."> --}}
       

    </div>  



@stop

@section('contenido')

  
<div class="site-section background-gris-0" id="intro">
    <div class="container">          
      <h2 class="titulos-class text-center text-color-primary font-secondary  mb-3">
       Estas son las herramientas... 
      </h2>    
      <p class="text-center text-color-primary m-0">            
        que cambiarán tu vida. Aprenderás a tomar el control de tus emociones y a concerte a tí mismo. <i class="fas fa-hand-point-down"></i>  
      </p>   
      
    </div>
</div>

      




    




    

    

   


   

    

   

@stop