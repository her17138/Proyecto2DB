<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{

    protected $primaryKey = 'marcaid';
    protected $fillable = [ 
        'marcaid',
        'productoid',
        'categoriaid',
        'nombre',
        'precio',
        'cantidad'
    ];
}
