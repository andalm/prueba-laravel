<?php

use Contratame\Entities\Categorias;

class CategoriasTableSeeder extends Seeder {

	public function run()
	{
            Categorias::create([
                'id' => 1,
                'nombre' => 'Frontend Developers',
                'slug' => 'frontend-developers',
            ]);
            
            Categorias::create([
                'id' => 2,
                'nombre' => 'Backend Developers',
                'slug' => 'backend-developers',
            ]);
            
            Categorias::create([
                'id' => 3,
                'nombre' => 'Designers',
                'slug' => 'designers',
            ]);
	}

}