<?php

namespace App\Http\Controllers\Publicas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositorios\NoticiasRepo;
use App\Repositorios\EmpresaRepo;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use App\Helpers\CurlHelper;
use App\Helpers\HelpersServicios;


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

        $blogs     = $this->NoticiasRepo->getUltimosBlogs();
        $Empresa   = $this->EmpresaRepo->getEmpresaDatos();
        $Servicios = '';

        if($tipo == '-por-los-servicios-de-laura')
        {
            $Servicios = HelpersServicios::get_servicios();
        }

       
        return view('paginas.paginas_personalizadas.laura_contacto', compact('Empresa','blogs','tipo','Servicios'));
    }

    // S e r v i c i o s
    public function get_pagina_servicios()
    {
        $blogs     = $this->NoticiasRepo->getUltimosBlogs();
        $Empresa   = $this->EmpresaRepo->getEmpresaDatos();
        $Servicios = HelpersServicios::get_servicios();

        return view('paginas.paginas_personalizadas.laura_servicios', compact('Empresa','blogs','Servicios'));
    }

    // Q u i é n   e s   L a u r a 
    public function get_pagina_quien_es()
    {
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.paginas_personalizadas.laura_quien_es', compact('Empresa','blogs'));
    }

    // T r a y e c t o r í a 
    public function get_que_hizo_laura()
    {
        $blogs          = $this->NoticiasRepo->getUltimosBlogs();
        $Empresa        = $this->EmpresaRepo->getEmpresaDatos();
        return view('paginas.paginas_personalizadas.laura_que_hizo', compact('Empresa','blogs'));
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