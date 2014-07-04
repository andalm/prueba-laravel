<?php

namespace Contratame\Repositories;

use Contratame\Entities\Categorias;

class CategoriaRepo extends BaseRepo{
    
    public function getModel()
    {
        return new Categorias;
    }
    
}

