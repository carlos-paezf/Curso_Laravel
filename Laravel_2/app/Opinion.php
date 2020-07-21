<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    /*Relaciones Polimorficas*/
    public function opinion(){
        return $this->morphTo();
    }
}
