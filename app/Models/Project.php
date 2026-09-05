<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'short_description',
        'description',
        'image',
        'technologies',
        'features',
        'project_url',
        'github_url',
        'is_featured',
        'status',
    ];

    protected $casts = [
        'technologies' => 'array',
        'features' => 'array',
        'is_featured' => 'boolean',
    ];
}