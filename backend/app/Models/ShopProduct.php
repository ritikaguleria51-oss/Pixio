<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopProduct extends Model
{
    protected $fillable = [
        'hero_title', 'hero_image', 'category_names', 'category_counts', 'colors',
        'sizes', 'tags', 'name', 'category', 'image', 'price', 'sale_label', 'status',
    ];
}