<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    protected $table = 'home';

    protected $fillable = [
        'image',
        'small_title',
        'title',
        'description',
        'primary_button_text',
        'primary_button_link',
        'secondary_button_text',
        'secondary_button_link',
        'feature_one_value',
        'feature_one_label',
        'feature_two_value',
        'feature_two_label',
        'feature_three_value',
        'feature_three_label',
        'sale_prefix',
        'sale_percent',
        'sale_suffix',
        'collection_label',
        'collection_title',
        'status',
    ];
}
