<!doctype html>
<html lang="es">
  <head>
    <title> @yield('title')  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url()}}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{url()}}/fonts/flaticon/font/flaticon.css">   

    @yield('favicon')
    <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/credo.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    @yield('og-tags')
    @yield('data-estructurada')
    @yield('pixcel-facebook')

    <meta name="Description" CONTENT="@yield('MetaContent')">      
    <META name="robots" content="@yield('MetaRobot')">
    <meta name="Keywords"  content="@yield('palabras-claves')">
    @include('paginas.comunes.analytics')
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
      
      <div id="app" class="site-wrap">

        {{-- C a r g a d o r --}}
        <div v-if="cargando" class="contiene-cargador">
         <div class="cssload-container">
           <div class="cssload-tube-tunnel"></div>
         </div>
        </div>

        {{-- A l g o   d e l   m e n ú    m ó b i l  --}}
        <div class="site-mobile-menu site-navbar-target">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>

        @yield('header')
        @yield('portada')
        @yield('contenido')
        @yield('footer')    

      </div> 

  

  <script src="{{url()}}{{ elixir('js/credo.js')}} " ></script>   


  @if(Auth::guest())
      <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
  @else
      @if(Auth::user()->role ==='adminMcos522')
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script> 
      @else
       <script  src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script> 
      @endif
  @endif
  <script  src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script> 
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-select/2.6.2/vue-select.js"></script> --}}
  <script  src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>

  <script type="text/javascript">
    @yield('vue')  
  </script>

  
  </body>
</html> 