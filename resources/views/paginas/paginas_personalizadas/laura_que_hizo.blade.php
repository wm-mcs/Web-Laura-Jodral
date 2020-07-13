@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/Portadas/laura-jodral-home-imagen-principal.jpg'/*--}}
{{--*/ $ImagenPortadaChica    = url() . '/imagenes/Portadas/laura-jodral-home-imagen-principal-chica.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/PaginasPersonalizadas/Socios/easy-socio-el-software-para-administrar-gimnasios-academias-de-baile-institutos-de-ingles-y-mucho-más.jpg'/*--}}
{{--*/ $Titulo                = 'Trayectoría de Laura Jodral' /*--}}
{{--*/ $DescriptionEtiqueta   = '' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_que_hizo_laura') /*--}}


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
              <div class="col-8 col-lg-6 p-4 " >
                <h1  class="titulos-class text-white font-primary mb-3">Mi trayectoría</h1>
                {{-- <h2 class="sub-titulos-class mb-3 text-white font-primary">Sumérgete en el mundo del autodescubrimiento  para llegar a ser la mejor versión de ti mismo</h2> --}}
                
                
               
                
           
                <p><a href="#trayectoria" class="scroll-to Boton-Fuente-Chico Boton-Blanco"> Ver la carrera de Laura <i class="fas fa-chevron-right"></i> </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
       <img v-if="mostrar_para_celuar" class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" data-src="{{$ImagenPortadaChica}}" alt="Laura Jodral portada."> 
       <img v-else class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" data-src="{{$ImagenPortada}}" alt="Laura Jodral portada."> 

       {{-- <img class="logo-float-easy-socio-portada" :src="empresa.logo_easy_blanco" alt="Easysocio ptograma de gestion de gimasios y academias simple de usar."> --}}
       

    </div>  



@stop

@section('contenido')

  
      

    <div  class="site-section " id="trayectoria">
      <div class="container ">
        <h2 class="text-color-primary titulos-class mb-4">Trayectoría</h2>
        <ul class="timeline mt-2 mb-4">          
          <li>
              <p class="mb-1">
                2012-2015
              </p>
              <p class="mb-3">
                <b>Terapeuta Gestalt.</b> Gestalt Mediterráneo, Palma de Mallorca.
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2015
              </p>
              <p class="mb-3">
                <b>Fundamentos Teóricos de la BioNeuroEmoción.</b> Instituto Español de BNE, Barcelona. 
              </p>            
          </li>
           <li>
              <p class="mb-1">
                2017-2018
              </p>
              <p class="mb-3">
                <b>Clown Gestalt.</b> Arte y Presencia, Palma de Mallorca. 
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2017
              </p>
              <p class="mb-3">
                <b>Coach Profesional.</b> Título avalado por la ICF. Lider-haz-go, Madrid. 
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2017
              </p>
              <p class="mb-3">
                <b>Master en PNL.</b> Institut Gestalt , Barcelona. 
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2017-2020
              </p>
              <p class="mb-3">
                <b>Astroanamnesis.</b> Eliseo Gallardo, Astrólogo.
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2019- 2020
              </p>
              <p class="mb-3">
                <b>Astrologia Psicologica y terapeutica.</b> Astroterapeutica. Pablo Flores.
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2019
              </p>
              <p class="mb-3">
                <b>Técnicas para la comprensión de los sueños.</b> CTBA. Virginia Gawel.
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2019
              </p>
              <p class="mb-3">
                <b>Prácticas para liberar lo condicionado.</b> CTBA. Virginia Gawel.
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2019
              </p>
              <p class="mb-3">
                <b>Astrología Vivencial.</b> COSMOLIVE.Cosmograma. Barcelona
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2019
              </p>
              <p class="mb-3">
                <b>Astrología Evolutiva.</b> Escuela de psicología Evolutiva. Barcelona.
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2019
              </p>
              <p class="mb-3">
                <b>Quirologia Evolutiva.</b> Escuela de psicología Evolutiva. Barcelona
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2020
              </p>
              <p class="mb-3">
                <b>Coaching de Vida.</b> David Bejarano, Coach estratégico. Udemy.
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2020
              </p>
              <p class="mb-3">
                <b>Psicoterapia Analítica Funcional.</b>  <a href="http://terapiascontextuales.Com">Terapiascontextuales.com.</a> 
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2020
              </p>
              <p class="mb-3">
                <b>Intervención Contextual en Apego,Intimidad,Dependencia y Evitación. </b>  <a href="http://terapiascontextuales.Com">Terapiascontextuales.com.</a> 
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2020
              </p>
              <p class="mb-3">
                <b>Estrategia Profesional y Marca Personal. </b>  Andrés Pérez Ortega. Estratega Personal. Udemy 
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2020
              </p>
              <p class="mb-3">
                <b>Design Thinking. </b> Iván Pinar Domínguez. Ingeniero TELECO. Udemy.
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2020
              </p>
              <p class="mb-3">
                <b>Habilidades Comunicativas.  </b> Antonio Santos. Periodista y comunicador audiovisual. Udemy
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2020
              </p>
              <p class="mb-3">
                <b>Registros Akáshicos I y II.  </b> Escuela del Amor Interior. Zipora Seguí Fiol.
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2020
              </p>
              <p class="mb-3">
                <b>Eneagrama.</b> Borja Vilaseca.
              </p>            
          </li>
          <li>
              <p class="mb-1">
                2020
              </p>
              <p class="mb-3">
                <b>Estudiante Grado Psicología.</b> UNED.
              </p>            
          </li>

        </ul>         
          
       </div>
      </div>
    

     

  


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
