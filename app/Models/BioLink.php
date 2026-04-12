<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BioLink extends Model
{
    protected $fillable = [
        'title',
        'url',
        'icon',
        'bg_color',
        'text_color',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('sort_order');
    }
}
