<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopCollection extends Model
{
    protected $fillable = [
        'top_left_image', 'top_right_image', 'bottom_left_image', 'bottom_right_image',
        'badge', 'heading', 'button_text', 'button_link', 'status',
    ];
}
