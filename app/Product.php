<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Okipa\LaravelModelJsonStorage\ModelJsonStorage;

class Product extends Model
{
    use ModelJsonStorage;

    protected $fillable = [
        'name', 'price', 'stock',
    ];

}
