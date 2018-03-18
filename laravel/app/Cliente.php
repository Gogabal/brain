<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
 
 	public function servicios()
		{
   				return $this->hasMany('App\Servicio');
		}
  protected $fillable = [
  		'nombre','apellido','telefono','correo'
  ];  
}
