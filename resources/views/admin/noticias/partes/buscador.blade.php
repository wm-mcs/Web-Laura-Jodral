{!! Form::model(Request::all(),['route'   => 'get_admin_noticias', 
                'method'  => 'GET',
                'class'   => 'col-6',
                'role'    => 'search' ])                             !!}
  <div class="col-12 d-flex align-items-center">
  {!! Form::text('name', null , ['class'       => 'input-text-class-primary col-5', 
                                 'placeholder' => 'Buscar'])        !!}
 

  <button type="submit" class="ml-3 sub-titulos-class text-color-primary col-1"><i class="fas fa-search"></i></button>
  </div>
  

{!! Form::close() !!}