

  {!! Form::open(             ['route' => 'auth_login_post',
                            'method'   => 'post',
                            'files'    => true,
                            'class'    => 'get_width_100'
                            ])               !!}

            
<div class="col-12 d-flex flex-column align-items-center">
<div class="col-11 col-lg-7 p-2 p-lg-5 background-gris-0">
            <div class="form-group">
              
              <div class="cols-sm-10">
                <div class="d-flex flex-column align-items-center">
                  <span class="input-group-addon mr-2">
                    <i class="fas fa-user"></i>
                  </span>
                  
                  
                  {!! Form::text('email', null ,['class'       => 'input-text-class-primary',
                                                 'id'          => 'username',
                                                 'placeholder' => 'Escribe tu email']) !!}
                </div>
              </div>
            </div>

            <div class="form-group">
              
              <div class="cols-sm-10">
                <div class="flex-row-center">
                  <span class="input-group-addon"><i class="fas fa-unlock"></i></span>  
                  <div class="auth-separador"></div>              
                  {!! Form::password('password', [ 'class'       => 'input-text-class-primary',
                                                   'id'          => 'password',
                                                   'placeholder' => 'Escribe tu contraseña']) !!}
                </div>
              </div>
            </div>

            <div class="form-group ">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>
            </div>
            
<div class="checkbox">
  <label>
    <input type="checkbox" value="">
    Recordar mi usuario
  </label>
</div>

    <hr>
   <div class="login-register">
                    <p class="text-center"><a href="{{route('password_recet_get')}}">Olvidé mi contraseña</a><!--  | <a href="{{route('register_get')}}">Aún no estoy registrado</a> --></p>
   </div>
   
</div>
</div>



{!! Form::close() !!}


