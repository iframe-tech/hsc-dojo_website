<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chapters extends Model
{
    protected $casts =[
         'route'=>'array',
    ];
}
