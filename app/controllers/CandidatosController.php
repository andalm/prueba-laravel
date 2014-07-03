<?php

use Contratame\Repositories\CategoriaRepo;

class CandidatosController extends BaseController {
    
    protected $categoriaRepo;

    public function __construct(CategoriaRepo $categoriaRepo)
    {
        $this->categoriaRepo = $categoriaRepo;
    }


    public function categoria($slug, $id)
    {
        $categoria = $this->categoriaRepo->find($id);
        
        return View::make('candidatos/categoria', compact('categoria'));
    }
}

