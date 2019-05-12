<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
    
    protected $primaryKey = 'valorid';
    protected $fillable = [ 
        'valorid',
        'productoid',
        'marcaid',
        'atributoid',
        'valor'
    ];
}
