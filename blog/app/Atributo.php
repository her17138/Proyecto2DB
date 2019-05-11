<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atributo extends Model
{
    protected $primaryKey = 'atributoid';
    public $timestamps = false;
    protected $fillable = [ 
        'atributoid',
        'productoid',
        'nombre'
    ];
}
