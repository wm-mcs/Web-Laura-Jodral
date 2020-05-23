<?php 




require __DIR__ . '/Formularios/Rutas_Formularios_Publicas.php';

require __DIR__ . '/Noticias/Rutas_Noticias_Publicas.php';




// H o m e
Route::get('/' , [                    
  'uses' => 'Publicas\Home_Public_Controller@get_home',
  'as'   => 'get_home']
);


// C o n t a c t o
Route::get('/Contacto' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_contacto',
  'as'   => 'get_pagina_contacto']
);

// S e r v i c i o s
Route::get('/Servicios' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_servicios',
  'as'   => 'get_pagina_servicios']
);

// Q u i é n   e s   L a u r a 
Route::get('/Quién-es-Laura-Jodral-Garcia' , [                    
  'uses' => 'Publicas\Paginas_Controller@get_pagina_quien_es',
  'as'   => 'get_pagina_quien_es']
);

