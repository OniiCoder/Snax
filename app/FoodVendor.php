<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodVendor extends Model
{
    protected $fillable = [
    	'user_id', 'business_name', 'business_category', 'business_description',
    ];
}
