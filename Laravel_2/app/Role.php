<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /*Relacion Many to Many*/
    public function clients(){
        return $this->belongsToMany('App\Client');
    }
}
