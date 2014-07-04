<?php

use Contratame\Repositories\CategoriaRepo;
use Contratame\Repositories\CandidatoRepo;

class CandidatosController extends BaseController {
    
    protected $categoriaRepo;
    protected $candidatoRepo;

    public function __construct(CategoriaRepo $categoriaRepo,
                                CandidatoRepo $candidatoRepo)
    {
        $this->categoriaRepo = $categoriaRepo;
        $this->candidatoRepo = $candidatoRepo;
    }

    public function categoria($slug, $id)
    {
        $categoria = $this->categoriaRepo->find($id);
        
        return View::make('candidatos/categoria', compact('categoria'));
    }
    
    public function mostrar($slug, $id)
    {
        $candidato = $this->candidatoRepo->find($id);
        
        return View::make('candidatos/mostrar', compact('candidato'));
    }
}

