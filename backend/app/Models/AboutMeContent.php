<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutMeContent extends Model
{
    protected $fillable = [
        'hero_image',
        'portrait_image',
        'hero_kicker',
        'hero_title',
        'intro_kicker',
        'intro_title',
        'intro_paragraph_one',
        'intro_paragraph_two',
        'signature_name',
        'signature_role',
        'values_kicker',
        'value_one_title',
        'value_one_description',
        'value_two_title',
        'value_two_description',
        'value_three_title',
        'value_three_description',
        'quote',
        'contact_kicker',
        'contact_title',
        'contact_email',
        'instagram_handle',
        'status',
    ];
}
