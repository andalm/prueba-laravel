<?php

use Contratame\Repositories\CandidatoRepo;

class HomeController extends BaseController {

    protected $candidateRepo;
    
    public function __construct(CandidatoRepo $candidateRepo)
    {
        $this->candidateRepo = $candidateRepo;
    }

    public function index()
    {
        $ultimos_candidatos = $this->candidateRepo->findLast();
        
        return View::make('home', compact('ultimos_candidatos'));
    }

}
