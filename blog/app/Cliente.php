<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    protected $primaryKey = 'clienteNIT';
    protected $fillable = [ 
        'clienteNIT',
        'Nombre',
        'Apellido',
        'Telefono',
        'Direccion'
    ];
}
