<?php namespace Contratame\Entities;

/**
 * Categorias
 *
 * @property integer $id
 * @property string $nombre
 * @property string $slug
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Categorias extends \Eloquent {
	protected $fillable = [];
}