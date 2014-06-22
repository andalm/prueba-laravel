<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CandidatosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 80) as $index)
		{
                    $nombre = $faker->name;
                            
                    $usuario = Usuarios::create([
                        'nombre_completo' => $nombre,
                        'correo' => $faker->email,
                        'contrasena' => \Hash::make(123456),
                        'perfil' => 'candidato',
                    ]);
                    
                    Candidatos::create([
                        'id' => $usuario->id,
                        'sitio_web' => $faker->url,
                        'descripcion' => $faker->text(200),
                        'trabajo_tipo' => $faker->randomElement([
                            'tiempo completo', 
                            'medio tiempo',
                            'trabajo en casa',
                            ]),
                        'categoria_id' => $faker->randomElement([1, 2, 3]),
                        'disponible' => true,
                        'slug' => \Str::slug($nombre),
                    ]);
		}
	}

}