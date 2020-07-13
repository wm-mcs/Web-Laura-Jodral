@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/Contacto/Laura-Jodral-contacto-portada.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Contacto/Laura-Jodral-contacto-terapias-foto-chica.jpg'/*--}}
{{--*/ $Titulo                = 'Contacto | Laura Jodral' /*--}}
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
	
@stop

@section('footer')
	
@stop



@section('portada')
    <div class="site-blocks-cover overlay bg-light" id="home-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-6 col-lg-6 p-2 p-lg-5 background-primary-transparent" >
                @if($tipo == '-con-laura-jodral')
                  <h1  class="titulos-class text-white font-secondary">Te acompaño!</h1>
                  <p class="parrafo-class text-white"> 
                   Para contactarme solicita una entrevista gratuita y sin compromiso para contarme tu situación y ver si te puedo acompañar.     <i class="fas fa-hand-point-down"></i> 
                  </p>               
                @elseif($tipo == '-para-coordinar-llamada')
                  <h1  class="titulos-class text-white font-secondary">Coordinar video llamada</h1>
                  <p class="parrafo-class text-white"> 
                   Para coordinar una video llamada gratuita rellenar el formulario de aquí abajo <i class="fas fa-hand-point-down"></i> 
                  </p> 
                @elseif($tipo == '-por-los-servicios-de-laura')
                  <h1  class="titulos-class text-white font-secondary">Coordinar video llamada</h1>
                  <p class="parrafo-class text-white"> 
                   Para coordinar una video llamada gratuita rellenar el formulario de aquí abajo <i class="fas fa-hand-point-down"></i> 
                  </p> 
                @else
                  <h1  class="titulos-class text-white font-secondary">Estoy para ayudarte</h1>
                  <p class="parrafo-class text-white"> 
                   Para hablar directamente conmigo llenar el formulario de aquí abajo <i class="fas fa-hand-point-down"></i> 
                  </p>
                @endif  
              </div>
            </div>
          </div>
        </div>
      </div>
      <img class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" data-src="{{$ImagenPortada}}" alt="Laura Jodral portada.">
    </div>
@stop

@section('contenido')   
     <div  class="site-section" id="formulario">
      <div class="container">
        <div class="d-flex  flex-column align-items-center justify-content-center">         
          <div class="col-6 col-lg-3 p-5 mb-3">
            <img data-src="{{url()}}/imagenes/Contacto/Laura-Jodral-contacto-terapias-foto-chica.jpg" 
               class="img-fluid p5 rounded-circle">
          </div>
          <div class="col-8 col-lg-5  mb-5">
            <p class="text-center color-text-gris">
              @if($tipo == '-con-laura-jodral')
               Para contactarme solicita una entrevista gratuita y sin compromiso para contarme tu situación y ver si te puedo acompañar.                
              @elseif($tipo == '-para-coordinar-llamada')
                Para contactarme solicita una entrevista gratuita y sin compromiso para contarme tu situación y ver si te puedo acompañar. 
              @elseif($tipo == '-por-los-servicios-de-laura')  
                Para contactarme solicita una entrevista gratuita y sin compromiso para contarme tu situación y ver si te puedo acompañar.  
              @else
                Para contactarme solicita una entrevista gratuita y sin compromiso para contarme tu situación y ver si te puedo acompañar. 
              @endif                
            </p>
          </div>
          <div class="col-lg-6  " id="formulario_contacto">
               <contacto-component :empresa="empresa" :color="variables.input_color_primary" inline-template>
                  @if($tipo == '-con-laura-jodral')
                   @include('paginas.home.vue.Contacto.Contacto_comun')              
                  @elseif($tipo == '-para-coordinar-llamada')
                    @include('paginas.home.vue.Contacto.Contacto_llamada') 
                  @elseif($tipo == '-por-los-servicios-de-laura')  
                    @include('paginas.home.vue.Contacto.Contacto_servicios') 
                  @else
                    @include('paginas.home.vue.Contacto.Contacto_comun')
                  @endif                 
               </contacto-component>
          </div>
        </div>
      </div>
    </div>
@stop