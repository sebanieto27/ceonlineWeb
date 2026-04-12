<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Banner extends Model
{
    protected $fillable = [
        'title',
        'body',
        'cta_text',
        'cta_url',
        'type',
        'pages',
        'bg_color',
        'text_color',
        'is_active',
        'is_dismissible',
        'start_at',
        'end_at',
        'sort_order',
    ];

    protected $casts = [
        'pages' => 'array',
        'is_active' => 'boolean',
        'is_dismissible' => 'boolean',
        'start_at' => 'datetime',
        'end_at' => 'datetime',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true)
            ->where(function ($q) {
                $q->whereNull('start_at')->orWhere('start_at', '<=', now());
            })
            ->where(function ($q) {
                $q->whereNull('end_at')->orWhere('end_at', '>=', now());
            });
    }

    public function scopeForPage(Builder $query, string $routeName): Builder
    {
        return $query->where(function ($q) use ($routeName) {
            $q->whereNull('pages')
              ->orWhereJsonContains('pages', $routeName)
              ->orWhereJsonContains('pages', '*');
        });
    }
}
