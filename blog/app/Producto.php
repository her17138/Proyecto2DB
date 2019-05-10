<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'productoid';
    public $timestamps = false;
    protected $fillable = [ 
        'productoid',
        'nombre'
    ];
}
