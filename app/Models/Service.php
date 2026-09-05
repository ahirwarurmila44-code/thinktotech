<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'icon',
        'features',
        'technologies',
        'is_featured',
        'status',
        'sort_order',
    ];

    protected $casts = [
        'features' => 'array',
        'technologies' => 'array',
        'is_featured' => 'boolean',
    ];
}