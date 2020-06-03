<div class="row">

 
  @foreach($blogs_relacionados as $blog)
   {{--*/ $Entidad  = $blog /*--}}
   {{--*/ $Route    = $Entidad->route /*--}}
   @include('paginas.noticias.noticias_lista_individual')
  @endforeach
</div>