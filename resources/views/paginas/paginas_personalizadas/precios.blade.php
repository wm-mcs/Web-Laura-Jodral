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
  {{-- @include('paginas.paginas_personalizadas.Footer.Footer_principal') --}}
@stop



@section('portada')
<div class="site-blocks-cover overlay background-primary" id="home-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div style="height: 100vh;" class="row justify-content-center">
          <div class="col-10 col-lg-6 p-2 p-lg-5 d-flex flex-column align-items-center  text-center" >
             <h1  class="titulos-class text-white font-secondary mb-4">Precios</h1>
             <div class="col-6 col-lg-3 p-5 mb-3">                  
               <img data-src="{{url()}}/imagenes/Contacto/Laura-Jodral-contacto-terapias-foto-chica.jpg" 
                 class="img-fluid p5 rounded-circle">
             </div>
             <p class="parrafo-class text-white"> 
              Estas son mis tarifas...
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
     <div class="row">
       <div class="col-6 col-lg-4 text-center p-3 p-lg-5 background-gris-0">
         <h2 class="titulos-class  font-secondary mb-3">Terapia gestalt</h2>
         <p class="mb-2"> <b>1 sesion</b> </p>
         <p> <i class="fas fa-hourglass-start"></i> Duración 75 minutos </p>
         <p>
           Precios: € 45 
         </p>
       </div>
       
     </div>
    </div>
</div>



      




    




    

    

   


   

    

   

@stop