<?php

/**
 * Usuarios
 *
 * @property integer $id
 * @property string $nombre_completo
 * @property string $correo
 * @property string $contrasena
 * @property string $perfil
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Usuarios extends \Eloquent {
	protected $fillable = [];
}