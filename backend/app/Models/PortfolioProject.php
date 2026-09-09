<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioProject extends Model
{
    protected $fillable = [
        'hero_title', 'hero_breadcrumb', 'image_main', 'image_two', 'image_three',
        'article_title', 'article_paragraph_one', 'article_paragraph_two',
        'client', 'seatpad', 'location', 'shipping', 'category',
        'previous_label', 'previous_title', 'previous_url', 'next_label',
        'next_title', 'next_url', 'related_category', 'status',
    ];
}