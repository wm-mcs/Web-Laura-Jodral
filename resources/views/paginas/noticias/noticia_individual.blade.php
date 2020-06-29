@extends('layouts.paginasPersonalizadas.layout')

@section('favicon')
<link rel="shortcut icon" href="{{ asset('imagenes/favicon-easy.ico') }}"> 
@stop

@section('header')
  @include('paginas.paginas_personalizadas.Header.Header_principal')
@stop

@section('footer')
  @include('paginas.paginas_personalizadas.Footer.Footer_principal')
@stop

@section('og-tags')
  <meta property="og:url"                content="{{$Noticia->route}}" />
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="{{ $Noticia->name}} | {{$Empresa->name}}" />
  <meta property="og:description"        content="
   {{$Noticia->descripcion_breve}} | {{$Empresa->name}}." />
   <meta property="og:image"               content="{{$Noticia->url_img_portada}}" />
   <meta property="og:image:secure_url"  content="{{$Noticia->url_img_portada}}" /> 

   <meta property="og:image:alt"         content="{{$Noticia->name}} |  {{$Empresa->name}}" /> 
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
            "@id": "{{$Noticia->route}}",
            "name": "{{$Noticia->name}}"
            }
          }          
         ]
        }
</script>


@stop


@section('title')
  {{ $Noticia->name}}    | {{$Empresa->name}}
@stop


@section('MetaContent')
 {{$Noticia->descripcion_breve}} |  {{$Empresa->name}} 
@stop

@section('MetaRobot')
  index,follow
@stop

@section('palabras-claves')
  
@stop

@section('vue')
  @include('paginas.home.vue.contacto-component')
  @include('paginas.home.vue.blog-list-component')
  @include('paginas.home.vue.vue-instance')
@stop




@section('iconos-compartir')

 <div   class="get_width_100 contenedor-iconos-share">
  

 <div class="flex-row-center sub-contenedor-iconos-share">

    <div class="iconos-share-titulo"><i class="fas fa-share-alt"></i> Compartir</div>
    

    {{-- //whatzap icono --}}
    <a class="iconos-share-formato mostrar-solo-mobil" href="whatsapp://send?text={{$Noticia->route}}" data-action="share/whatsapp/share">
            <i class="fab fa-whatsapp-square"></i>
    </a>


    <a class="iconos-share-formato" href="http://facebook.com/sharer.php?u={{$Noticia->route}}">
            <i class="fab fa-facebook"></i>
    </a>

    <a class="iconos-share-formato" href="https://www.linkedin.com/shareArticle?url={{$Noticia->route}}">
            <i class="fab fa-linkedin"></i>
    </a>

    <a class="iconos-share-formato" href="https://twitter.com/?status=Me gusta esta página {{$Noticia->route}}">
            <i class="fab fa-twitter-square"></i>
    </a>
   
 </div> 



</div>

@stop





@section('contenido')


<div class="site-blocks-cover overlay bg-light" id="home-section">      
   <img v-if="mostrar_para_celuar" class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" src="{{$Noticia->url_img_portada_chica}}" alt="Laura Jodral portada."> 
   <img v-else class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" src="{{$Noticia->url_img_portada}}" alt="Laura Jodral portada.">        
</div>  






  

<div class="conenedor-maximo-blog">
  
   {{-- Contenido del blog --}}
   <div class="contenedor-blog" id="contenido-noticia"> 
       {!! $Noticia->contenido_render !!}
   </div>

   {{-- Sobre el autor --}}
   <div class="wraper-secciones-blog-titulo-content">
    <div class="wrpaer-titulo-de-seccion">Sobre el autor</div>
    <div class="contiene-otras-secciones-del-blog">
     @include('paginas.noticias.sobre_el_autor')
    </div>
   </div>
   

   {{-- Blog relacionados --}}
   @if($blogs_relacionados->count() > 0)
   <div class="wraper-secciones-blog-titulo-content">
     <div class="wrpaer-titulo-de-seccion">Artículos relacionados</div>
      
      @include('paginas.noticias.blogs_relacionados')
     
   </div>
   @endif
   

</div>  


@stop 


