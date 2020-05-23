{!! Form::model(Request::all(),['route'   => 'get_admin_noticias', 
                'method'  => 'GET',
                'class'   => 'col-6 col-lg-7',
                'role'    => 'search' ])                             !!}
  <div class="col-12 d-flex align-items-center">
	  {!! Form::text('name', null , ['class'       => 'input-text-class-primary col-4', 
	                                 'placeholder' => 'Buscar'])        !!}
	 

	  <button type="submit" class="Boton-Fuente-Chica Boton-Primario-Sin-Relleno col-2">
	    <i class="fas fa-search"></i>
	  </button>
  </div>
{!! Form::close() !!}