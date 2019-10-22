<?php

namespace App;

use Illuminate\Database\Eloquent\Mo del;

class proveedor extends Model
{
	protected $table='proveedor';

    protected $fillable=[
    'nit',
    'nombre',
    'telefono',
    'direccion'
    ]
}
