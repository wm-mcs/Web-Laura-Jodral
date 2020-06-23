<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\EmpresaRepo;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use App\Helpers\CurlHelper;


class Paginas_Controller extends Controller
{
   
    protected $NoticiasRepo;
    protected $EmpresaRepo;    
    protected $CurlHelper;

    public function __construct(NoticiasRepo        $NoticiasRepo,
                                EmpresaRepo         $EmpresaRepo,                                 
                                CurlHelper          $CurlHelper   )
    {
        
        $this->NoticiasRepo        = $NoticiasRepo;
        $this->EmpresaRepo         = $EmpresaRepo;
        $this->CurlHelper          = $CurlHelper;
    }

    // C o n t a c t o
    public function get_pagina_contacto($tipo)
    {       

        $blogs   = $this->NoticiasRepo->getUltimosBlogs();
        $Empresa = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.paginas_personalizadas.laura_contacto', compact('Empresa','blogs','tipo'));
    }

    // S e r v i c i o s
    public function get_pagina_servicios()
    {
        $blogs     = $this->NoticiasRepo->getUltimosBlogs();
        $Empresa   = $this->EmpresaRepo->getEmpresaDatos();
        $Servicios = [
                        [
                         'name'        => 'Terapia Gestalt',
                         'descripcion' => 'Basada en el desarrollo del potencial humano centrándose en el aquí y el ahora, el darse cuenta, tomando conciencia de lo que le ocurre a uno mismo y haciéndose responsable de sus actos, lo que conlleva a unos resultados de saber guiarse a uno mismo convirtiéndose en una filosofía de vida.',
                         'img'         => url().'/imagenes/Servicios/gestalt.jpg'
                        ],
                        [
                         'name'        => 'Coaching',
                         'descripcion' => 'El Coaching para resultados , acompañamiento mediante  la conversación basada en la confianza y el   compromiso focalizada en preguntas potenciadoras para el alcance del objetivo deseado. El coaching requiere de planes de acción  que cada persona se compromete a poner en marcha y realizar en un plazo determinado para alcanzar dicho objetivo respetando sus propios ritmos. ‘Me lo contaron y lo olvidé, lo vi y lo entendí,lo hice y lo aprendí’ Confucio
.',
                         'img'         => url().'/imagenes/Servicios/coaching.jpg'
                        ],
                        [
                         'name'        => 'PNL',
                         'descripcion' => 'La PNL  ( Programación Neuro Lingüística) es una metodología de acompañamiento al cambio, basada en el modelaje de programas ya aprendidos a través del lenguaje y los sentidos. Gracias a ciertas habilidades y técnicas se consigue pensar y actuar de forma efectiva  incrementando las opciones y mejorando la calidad de vida.‘Tus creencias no están hechas de realidades, sino más bien es la realidad la que está hecha de tus creencias‘ Richard Bandler.',
                         'img'         => url().'/imagenes/Servicios/pnl.jpg'
                        ],
                        [
                         'name'        => 'Astrología Humanista',
                         'descripcion' => 'Es una herramienta de autoconocimiento la cual representa la psique humana a través de un mapa simbólico,llamado Carta Natal dada por la fecha, hora y lugar de nacimiento de la persona. Su interpretación nos permite ver los potenciales, recursos, dificultades, bloqueos, talentos, conflictos... del individuo, entre otras muchas cosas. Es una poderosa herramienta de autodesarrollo personal gracias a la toma de conciencia ,lo que conduce a entender y sanar el mundo emocional.‘Conócete a ti mismo y conocerás el Universo’ Sócrates .',
                         'img'         => url().'/imagenes/Servicios/astrologia-humanista.jpg'
                        ],
                     ];  

        $Servicios = json_encode($Servicios);


        return view('paginas.paginas_personalizadas.laura_servicios', compact('Empresa','blogs','Servicios'));
    }

    // Q u i é n   e s   L a u r a 
    public function get_pagina_quien_es()
    {
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.paginas_personalizadas.laura_quien_es', compact('Empresa','blogs'));
    }



    // B l o g   L i s t a d o 
    public function get_pagina_noticias_listado(Request $Request)
    {
        
        //La página en la cual está
        $Pagina   = isset($_GET['page']) ? (int)$_GET['page'] : 1;  

        //Me traigo los últimos blogs y los pagino
        $Blogs    = Cache::remember('Blogs-page-' . $Pagina, 60, function() use ($Request) {
                        return $this->NoticiasRepo
                                    ->getEntidadActivasYOrdenadasSegunPaginadas($Request,'created_at','desc',6);
                    }); 
        $Empresa  = $this->EmpresaRepo->getEmpresaDatos();   
        return view('paginas.noticias.noticias',compact('Blogs','Empresa'));     
        
    }
    
    // B l o g   I n d i v i d u a l 
    public function get_pagina_noticia_individual($name,$id)  {
       
        $Noticia              = $this->NoticiasRepo->find($id);
        $Empresa              = $this->EmpresaRepo->getEmpresaDatos();        
        
        $blogs_relacionados   = $this->NoticiasRepo->getBlogsRelacionados($Noticia);
        
        return view('paginas.noticias.noticia_individual',compact('Noticia','Empresa','blogs','blogs_relacionados'));
    }



   
    



}