<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "article_name",
        "section",
        "price",
        "date",
        "made_in",
        "file_route",
    ];
}
