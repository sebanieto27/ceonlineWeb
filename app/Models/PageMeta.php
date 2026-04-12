<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class PageMeta extends Model
{
    protected $fillable = [
        'route_name',
        'page_label',
        'meta_title',
        'meta_description',
        'og_image',
        'custom_head',
    ];

    public static function forRoute(string $routeName): ?self
    {
        return Cache::rememberForever("page_meta.{$routeName}", function () use ($routeName) {
            return static::where('route_name', $routeName)->first();
        });
    }

    public static function bustCache(string $routeName): void
    {
        Cache::forget("page_meta.{$routeName}");
    }
}
