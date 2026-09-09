<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUsContent extends Model
{
    protected $fillable = [
        'hero_image', 'story_image', 'detail_image', 'hero_kicker', 'hero_title',
        'stat_one_number', 'stat_one_label', 'stat_two_number', 'stat_two_label',
        'stat_three_number', 'stat_three_label', 'story_kicker', 'story_title',
        'story_paragraph_one', 'story_paragraph_two', 'story_link_text', 'story_link_url', 'experience_kicker',
        'experience_title', 'experience_paragraph_one', 'experience_paragraph_two',
        'signature_name', 'signature_role', 'cta_kicker', 'cta_title',
        'instagram_handle', 'status',
    ];
}