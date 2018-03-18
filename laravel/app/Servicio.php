<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    //
   public function clientes()
   		{
   			return $this->belongsTo('App\Cliente');
		}

		  protected $fillable = [
  				'nombre','tipo',
  ];  
}
