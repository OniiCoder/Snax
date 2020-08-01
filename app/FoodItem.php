<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    protected $fillable = [
    	'category_id', 'name', 'description', 'price',
    ];

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
