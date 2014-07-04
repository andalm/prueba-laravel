<?php

namespace Contratame\Repositories;

use Contratame\Entities\Candidatos;

class CandidatoRepo extends BaseRepo
{
    public function getModel()
    {
        return new Candidatos;
    }
}
