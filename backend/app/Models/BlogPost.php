<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'eyebrow', 'page_title', 'page_intro', 'title', 'category',
        'image', 'link_text', 'link_url', 'status',
    ];
}