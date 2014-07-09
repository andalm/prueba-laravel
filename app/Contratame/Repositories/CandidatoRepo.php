<?php

namespace Contratame\Repositories;

use Contratame\Entities\Candidatos;
use Contratame\Entities\Categorias;

class CandidatoRepo extends BaseRepo
{
    public function getModel()
    {
        return new Candidatos;
    }
    
    public function findLast($take = 10)
    {
        return Categorias::with([
            'candidatos' => function ($q) use ($take){
                $q->take($take);
                $q->orderBy('created_at', 'DESC');
            }, 
            'candidatos.usuario'
        ])->get();
    }
}
