<?php 

//Noticias
Route::get('/blog' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_noticias_listado',
  'as'   => 'get_pagina_noticias_listado']
);
     //Noticia Individual
      Route::get('/blog/{name}/{id}' , [                    
        'uses' => 'Publicas\Paginas_Controller@get_pagina_noticia_individual44',
        'as'   => 'get_pagina_noticia_individual']
      )->where(['id'  => '[0-9]+',
                'name'=> '^[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*$']);