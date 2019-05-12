<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
    
    protected $primaryKey = 'valorid';
    public $timestamps = false;
    protected $fillable = [ 
        'productoid',
        'marcaid',
        'atributoid',
        'valor'
    ];
}
