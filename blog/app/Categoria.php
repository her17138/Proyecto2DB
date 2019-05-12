<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    
    protected $primaryKey = 'categoriaid';
    protected $fillable = [ 
        'categoriaid',
        'productoid',
        'nombre'
    ];
}
