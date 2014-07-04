<?php namespace Contratame\Entities;

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
        
    public function usuario()
    {
        return $this->hasOne('Contratame\Entities\Usuarios', 'id', 'id');
    }
    
    public function categoria()
    {
        return $this->belongsTo('\Contratame\Entities\Categorias', 'categorias_id', 'id');
    }
    
    public function getTrabajoTipoTitleAttribute()
    {
        return \Lang::get('utils.trabajo_tipo.' . $this->trabajo_tipo);
    }
}