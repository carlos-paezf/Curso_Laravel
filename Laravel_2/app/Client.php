<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /*Relacion One to One*/
    public function article(){
        return $this->hasOne('App\Article');
    }

    /*Relaciones One to Many*/
    public function articles(){
        return $this->hasMany('App\Article');
    }

    /*Relaciones Many to Many*/
    public function roles(){
        return $this->belongsToMany('App\Role')
                    ->withTimestamps();
    }

    /*Relacion Polimorfica*/
    public function opinions(){
        return $this->morphMany('App\Opinion', 'opinion');
    }
}
