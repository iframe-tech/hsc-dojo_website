<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forum extends Model
{  
    public $primaryKey='id';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
