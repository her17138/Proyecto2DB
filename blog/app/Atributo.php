<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atributo extends Model
{
    protected $primaryKey = 'atributoid';
    protected $fillable = [ 
        'atributoid',
        'productoid',
        'nombre'
    ];
}
