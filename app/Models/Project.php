<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'description',
        'image',
        'technologies',
        'features',
        'live_url',
        'github_url',
        'order'
    ];

    protected $casts = [
        'features' => 'array',
    ];

    public function getTechnologiesArrayAttribute()
    {
        return explode(', ', $this->technologies);
    }
}