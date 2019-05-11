<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineaFactura extends Model
{
    protected $primaryKey = 'lineaid';
    public $timestamps = false;
    protected $fillable = [ 
        'facturaid',
        'productoid',
        'marcaid',
        'cantidad',
        'preciounitario'
    ];
}
