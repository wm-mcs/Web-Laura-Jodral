@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url() . '/imagenes/Quien/Sobre-Laura-Jodral-Portada.jpg'/*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/Contacto/Laura-Jodral-contacto-terapias-foto-chica.jpg'/*--}}
{{--*/ $Titulo                = 'Sobre Laura Jodral' /*--}}
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
              <div class="col-lg-8 " style="max-width: 550px;">
                <h1  class="titulos-class text-white">Laura Jodral</h1>
                
                {{-- <p class="parrafo-class text-white"> Soy Laura Jodral y estoy aquí para acompañarte en tu proceso de desarrollo personal.</p>
               
                
           
                <p><a href="#sobre-mi" class="Boton-Fuente-Chico Boton-Blanco"> Aprendé como ahora mismo <i class="fas fa-chevron-right"></i> </a></p> --}}
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
      <h2 class="mb-4 sub-titulos-class text-center text-color-primary text-bold">
        HAS LLEGADO HASTA AQUÍ POR ALGO.
      </h2>
      <h3 class="sub-titulos-class text-center text-color-primary mb-4">
        Hay momentos difíciles en la vida, conflictos, bloqueos, pérdidas, obstáculos, miedos…
      </h3>    

      <p class="text-center text-color-primary m-0">        
       ¿Quieres vivir tu vida plena y conscientemente? ¿Te gustaría saber cómo? te ofrezco las herramientas para que puedas llevar tu vida a otro nivel.
      </p>   
      
    </div>
  </div>
  <div class="background_img background_img_fixed img_help-quien"></div>

      



    <div  class="site-section background-gris-0" id="">
      <div class="container d-flex flex-column align-items-center">

        <div class=" p-4 mb-4 col-6 col-md-4 col-lg-3 d-flex flex-column align-items-center">
          <img class="rounded-circle img-fluid" data-src="{{url()}}/imagenes/Contacto/Laura-Jodral-contacto-terapias-foto-chica.jpg">
        </div>
          
        
        <div class="col-12 p-4 border border-primary mb-3 ">
          <p class=" parrafo-class mb-3">            
            El poder usar  la <b>Gestalt, el Coaching, la Astrología y la PNL  </b> como herramientas de trabajo para el acompañamiento terapéutico me ayudan a percibir y orientar a las persona desde una comprensión mucho más amplia. Esto, sumado a mi grado de sensibilidad me dotan de una empatía necesaria para el acompañamiento terapéutico.
          </p>  
          <p class=" parrafo-class mb-3">            
            Con 18 años y recién terminado el Bachillerato, sin tener la menor idea de qué hacer con mi vida decidí irme a Inglaterra a trabajar durante 6 meses , de ahí continúe rumbo a  Alemania luego  a Escocia, de vuelta a Alemania, andaba sin rumbo fijo, perdida, como en busca de algo o huyendo de algo que en esos momentos ni tan siquiera era consciente de para qué hacia lo que hacía o que me llevaba a hacer lo que estaba haciendo. Ante esa búsqueda, también buscaba experiencias límite lo que me llevó a saltar de un avión a 4000 metros del suelo( salto tándem) y a realizar caída libre a 60 metros del suelo(puenting)unas de las mejores experiencias de mi vida. En el año 2012, a mis 28 años, decidí formarme como Terapeuta Gestalt en la escuela Gestalt Mediterráneo en Palma de Mallorca, fue aquí donde encontré mi pasión y me comenzaron a asaltar preguntas existenciales entre ellas, por qué somos como somos y para qué hacemos lo que hacemos.
          </p>  
          <p class=" parrafo-class mb-3">            
            Esta serie de preguntas que revoloteaban continuamente sobre mi cabeza hizo que me adentrase en el fascinante mundo de la mente humana y todo lo relacionado con el desarrollo y comprensión del ser Humano y hasta el dia de hoy sigo investigando sobre este  increíble mundo de la mente y conciencia humana.
          </p> 
          <p class=" parrafo-class mb-3">            
            Mi mundo interno cambió por completo y continué formándome como Coach Profesional, realicé el Master en PNL (Programación Neurolingüística) y lo siguiente que me esperaba era el apasionante mundo de la Astrología Humanista, el cual me ayudó a formar una comprensión del ser más holística. Fue la guinda del pastel.
            Día a día continúo investigando y formándome  apasionadamente en el increíble y gran desconocido mundo del Ser en sí mismo.
          </p>       
          <p class=" parrafo-class mb-3">            
            Creo en algo más que en lo tangible, lo que me lleva a confiar en mi guía interno y creer que no pasa nada mas que lo inevitable y que cada encuentro se da por una razón inalcanzable a nuestros sentidos pero necesario para el alma, por lo que si has llegado hasta aquí, a leer estas líneas, no es casualidad que nos hayamos encontrado.
          </p>  
          <p class=" parrafo-class mb-4">            
            Escucha a tu maestro interno y déjate guiar por tu intuición.
          </p>
          <p class="sub-titulos-class mb-3 font-primary">
            "Conócete a ti mismo y conocerás el Universo"
          </p>
          <p>
            <cite>Sócrates </cite>
          </p>
        </div>
        
      </div>
    </div>

     <div  class="site-section " id="">
      <div class="container ">
        <div class="row d-flex flex-row justify-content-start">
          <div class="col-lg-6 ">
          <h2 class="h2-titulos-class mb-4 text-color-primary">¿Qué haré por tí?</h2>
            <p class="parrafo-class mb-5">Como facilitadora del desarrollo personal, detectaré las áreas de dificultad que te impiden crecer personal y profesionalmente , te asistiré en tus procesos de aprendizaje y cambio  y te apoyaré para conseguirlo. Del mismo modo que si uno se adentra en un lugar desconocido ,a oscuras ,sintiéndose desorientado sin saber por dónde ir en ese momento, si tuviese una linterna a mano le ayudaría a orientarse y seguir caminando, hay momentos en la vida en que gracias a esa ‘linterna’ podemos recorrer el camino que en un primer momento  pensábamos que nos sería imposible o dificultoso. A veces tenemos que transitar partes del camino menos agradables pero necesarias para llegar a nuestro destino deseado.
            </p>   
            <p class="sub-titulos-class mb-3 font-primary">
            "El proceso terapéutico consiste en pasar de la necesidad de apoyarse en otro a la capacidad de apoyarse en uno mismo"
            </p>
            <p>
              <cite>Fritz Perls</cite>
            </p>
            <p class="parrafo-class m-0">
             Confío en cada uno puede llegar a ser la mejor versión de sí mismo y la experiencia me ha mostrado que la gran mayoría de las personas viven distanciadas de sí mismas, caminando por la vida como medianamente pueden, sin ser quien realmente son con todo su ser y sin experimentar todas las potencialidades que tienen para manifestar en este mundo ,lo cual acarrea una serie de conflictos internos que impiden desarrollarse y evolucionar y que si se dedicasen un poquito de tiempo y amor para  mirarse a sí mismos podrían disfrutar de una vida más plena,consciente y responsable y que mejor momento que ahora, en esta Vida, en la que aún puedes hacer algo por ti.
            </p> 
            <p class="sub-titulos-class mb-3 font-primary">
            "Cuando ya no podemos cambiar una situación, tenemos el desafío de cambiarnos a nosotros mismos"
            </p>
            <p>
              <cite>Viktor Frankl</cite>
            </p>
          </div>

           <div class="col-lg-6 order-3 pl-lg-5 order-lg-1">
            <img  v-if="mostrar_para_celuar" class="img-fluid mb-4" data-src="{{url()}}/imagenes/Servicios/Sobre_laura_que_haré_por_ti_vertical_chica.jpg" alt="Laura Jodral">
            <img  v-else class="img-fluid mb-4" data-src="{{url()}}/imagenes/Servicios/Sobre_laura_que_haré_por_ti_vertical.jpg" alt="Laura Jodral">
           </div>
          
        </div>
      </div>
    </div>


    <div class="site-section background-gris-1">
    <div class="container d-flex flex-column align-items-center">
      
          

       

      <div class="col-12 col-lg-10 p-4">
          <a href="{{route('get_pagina_servicios')}}" class="Boton-Fuente-Chica Boton-Primario-Relleno "> Descubre las herramientas que llevarán tu vida al siguente nivel <i class="fas fa-chevron-right"></i>
           </a>
        </div>
      
    </div>
  </div>

    



    




    

    

   


   

    

   

@stop