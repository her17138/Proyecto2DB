<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    
    protected $primaryKey = 'categoriaid';
    public $timestamps = false;
    protected $fillable = [ 
        'productoid',
        'nombre'
    ];
}
