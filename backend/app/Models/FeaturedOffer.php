<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedOffer extends Model
{
    protected $fillable = [
        'section_subtitle', 'section_title', 'see_all_text', 'see_all_link',
        'tag', 'title', 'image', 'background_class', 'button_text', 'button_link', 'status',
    ];
}
