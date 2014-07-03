<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidatos', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('sitio_web');
                        $table->text('descripcion');
                        $table->enum('trabajo_tipo', [
                            'tiempo completo', 
                            'medio tiempo',
                            'trabajo en casa',
                            ]
                        );
                        $table->integer('categorias_id')->unsigned();
                        $table->boolean('disponible');
                        $table->string('slug');
                        
                        $table->foreign('categorias_id')->references('id')->on('categorias');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('candidatos');
	}

}
