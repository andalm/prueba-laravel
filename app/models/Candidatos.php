<?php

/**
 * Candidatos
 *
 * @property integer $id
 * @property string $sitio_web
 * @property string $descripcion
 * @property string $trabajo_tipo
 * @property integer $categoria_id
 * @property boolean $disponible
 * @property string $slug
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Candidatos extends \Eloquent {
	protected $fillable = [];
}