<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    protected $primaryKey = 'clienteNIT';
    public $timestamps = false;
    protected $fillable = [ 
        'clienteNIT',
        'Nombre',
        'Apellido',
        'Telefono',
        'Direccion'
    ];
}
