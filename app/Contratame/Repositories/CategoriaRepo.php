<?php

namespace Contratame\Repositories;

use Contratame\Entities\Categorias;

class CategoriaRepo {
    
    public function find($id)
    {
        return Categorias::find($id);
    }
}

