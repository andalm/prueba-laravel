<?php

namespace Contratame\Repositories;

use Contratame\Entities\Categorias;

class CategoriaRepo extends BaseRepo{
    
    public function find($id)
    {
        return Categorias::find($id);
    }

    public function getModel()
    {
        return new Categorias;
    }
    
}

