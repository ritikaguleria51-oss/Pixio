<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    protected $fillable = [
        'hero_image', 'hero_kicker', 'hero_title', 'hero_description',
        'intro_kicker', 'intro_title', 'intro_description', 'monthly_label',
        'yearly_label', 'yearly_badge', 'name', 'price', 'currency',
        'period_label', 'description', 'popular', 'button_text', 'button_url',
        'feature_heading', 'feature_one_name', 'feature_one_included',
        'feature_two_name', 'feature_two_included', 'feature_three_name',
        'feature_three_included', 'feature_four_name', 'feature_four_included',
        'feature_five_name', 'feature_five_included', 'note_title',
        'note_description', 'note_link_text', 'note_link_url', 'status',
    ];

    protected $casts = [
        'popular' => 'boolean',
        'status' => 'boolean',
        'feature_one_included' => 'boolean',
        'feature_two_included' => 'boolean',
        'feature_three_included' => 'boolean',
        'feature_four_included' => 'boolean',
        'feature_five_included' => 'boolean',
    ];
}