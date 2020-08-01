<?php

namespace App;

use App\FoodItem;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title', 'description',
    ];
    
    public function items() {
        return $this->hasMany(FoodItem::class, 'category_id');
    }
}
