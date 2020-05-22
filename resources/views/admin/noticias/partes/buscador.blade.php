{!! Form::model(Request::all(),['route'   => 'get_admin_noticias', 
                'method'  => 'GET',
                'class'   => 'row',
                'role'    => 'search' ])                             !!}
  <div class="row">
  {!! Form::text('name', null , ['class'       => 'input-text-class-primary', 
                                 'placeholder' => 'Buscar'])        !!}
 

  <button type="submit" class="sub-titulos-class text-color-primary"><i class="fas fa-search"></i></button>
  </div>
  

{!! Form::close() !!}