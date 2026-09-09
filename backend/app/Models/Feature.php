<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $table = 'features';

    protected $fillable = [
        'image',
        'name',
        'description',
        'section_small_title',
        'section_title',
        'section_description',
        'explore_text',
        'status',
    ];
}
