<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    
    protected $primaryKey = 'facturaid';
    protected $fillable = [ 
        'facturaid',
        'clienteNIT',
        'fecha',
        'direccion',
        'total'
    ];
}
