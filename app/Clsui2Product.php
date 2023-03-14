<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clsui2Product extends Model
{
    protected $fillable = [
        'product_name',
        'description',
        'product_category'
    ];
}