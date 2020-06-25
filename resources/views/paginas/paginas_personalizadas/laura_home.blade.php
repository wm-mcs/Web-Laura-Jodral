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
              <div class="col-8 col-lg-6 p-4 background-black-transparent" >
                <h1  class="titulos-class text-white font-secondary mb-3">Di si! a la vida</h1>
                <h2 class="sub-titulos-class mb-3 text-white font-primary">Sumérgete en el mundo del autodescubrimiento  para llegar a ser la mejor versión de ti mismo</h2>
                
                <p class="parrafo-class text-white mb-3">Toma las riendas y prepara tu vida.</p>
               
                
           
                <p><a href="#sobre-mi" class="scroll-to Boton-Fuente-Chico Boton-Blanco"> Te acompaño! <i class="fas fa-chevron-right"></i> </a></p>
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
      

    <div  class="site-section " id="">
      <div class="container ">
        <div class="row d-flex flex-row align-items-center justify-content-center">
          <div class="col-lg-6 ">
          <h2 class="h2-titulos-class mb-4 text-color-primary">Vive la vida que <i class="fas fa-heart"></i></h2>
          <p class="parrafo-class mb-3"> Como facilitadora del desarrollo personal ,<strong>detectaré las áreas de dificultad que te impiden crecer personal y profesionalmente  y te asistiré en tus procesos de aprendizaje y cambio para conseguirlo</strong> .  
          </p>   

          <p class="parrafo-class mb-3">
             Gracias a mi búsqueda sobre el sentido de la vida sumado a las experiencias vividas encontré las herramientas para el desarrollo del potencial humano. Este proceso combina todo lo que he aprendido de: 
          </p> 

          <ul class="mb-3">
            <div class="lista-class">Terapia Gestalt</div>
            <div class="lista-class">PNL ( Programación Neuro Lingüística)</div>
            <div class="lista-class">Coaching</div>
            <div class="lista-class">Astrologia Humanista</div>
          </ul>

          <a href="{{route('get_pagina_servicios')}}" class="Boton-Primario-Sin-Relleno Boton-Fuente-Chico"> 
          LLeva tu vida al siguiente nivel 
          <i class="fas fa-chevron-right"></i>
          </a>


          </div>
          <div class="col-12  col-lg-6 p-2 p-lg-4 mt-3 mt-lg-0 " >
            <img class="img-fluid" src="{{url()}}/imagenes/Home/laura_jodral_vive_la_vida_que_amas.jpg">
            
          </div>
          
          
        </div>
      </div>
    </div>

      @include('paginas.paginas_personalizadas.home_sobre_mi')

       <div class="site-section background-gris-1">
        <div class="container">          
          <h3 class="sub-titulos-class text-center m-0 text-color-primary font-italic mb-3">
            "La vida es un 10% lo que te pasa y un 90% cómo reaccionas ante eso".
          </h3>    
        </div>
       </div>
        <div class="site-section background-gris-0">
        <div class="container">          
          <p class="parrafo-class text-color-primary m-3 text-center"> 
          Te ofrezco un acompañamiento  terapéutico utilizando diferentes herramientas de orientación, desarrollo y evolución  para tu crecimiento  personal y profesional  facilitandote el  desarrollo de tus potencialidades y recursos. 
          </p> 
           <a :href="empresa.route_contacto_llamada" class="Boton-Primario-Sin-Relleno Boton-Fuente-Chico"> 
          Para coordinar una video llamada gratuita click aquí 
          <i class="fas fa-chevron-right"></i>
          </a>     
        </div>
       </div>

      {{-- L i b r o s --}}
      {{-- <div class="background_img background_img_fixed img_home_primera"> </div> --}}

      
      {{-- S e r v i c i o s  --}}
      {{-- @include('paginas.paginas_personalizadas.home_servicios') --}}


    <section v-if="blogs.length" class="site-section background-gris-1" id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-5 position-relative">
            <h2 class="text-color-primary titulos-class text-center font-secondary mb-5">Blog</h2>
          </div>
          @foreach($blogs as $Blog)
          {{--*/ $Entidad  = $Blog /*--}}
          {{--*/ $Route    = $Entidad->route /*--}}
          @include('paginas.noticias.noticias_lista_individual')
          @endforeach

        </div>
      </div>
    </section>
      

      {{-- C o n t a c t o  --}}
      @include('paginas.paginas_personalizadas.home_contacto')




    




    

    

   


   

    

   

@stop
