<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class Category extends Model
{
    use HasFactory;

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function getByCategory($limitCount = 10): LengthAwarePaginator
    {
        return $this->posts()->with('category')->orderBy('updated_at', 'desc')->paginate($limitCount);
    }
}
