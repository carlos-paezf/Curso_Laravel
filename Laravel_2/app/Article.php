<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    /*  En caso de tener una tabla con nombre diference o ID diferente
    protected $table='articles';
    protected %primaryKey='id';
    */

    protected $fillable=[
        'name_article',
        'price',
        'made_in',
        'section',
        'comments',
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
