<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromoGrid extends Model
{
    protected $fillable = [
        'large_image', 'large_label', 'large_link', 'heading', 'description', 'heading_link',
        'small_one_image', 'small_one_label', 'small_one_link',
        'small_two_image', 'small_two_label', 'small_two_link',
        'sale_percent', 'sale_text', 'status',
    ];
}
