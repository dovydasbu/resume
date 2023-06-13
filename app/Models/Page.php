<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    const HOME_SLUG = 'home';

    protected $fillable = [
        'slug',
    ];

    public function scopeSlug(Builder $query, string $slug): void
    {
        $query->where('slug', $slug);
    }
}
