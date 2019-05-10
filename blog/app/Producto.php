<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'productoid';
    public $timestamp = false;
    protected $fillable = [ 
        'productoid',
        'nombre'
    ];
}
