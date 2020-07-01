<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    protected $fillable = [
    	'category_id', 'name', 'description', 'price',
    ];
}
