<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'body', 'category_id'];

    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getPaginateByLimit(int $limitCount = 10): LengthAwarePaginator
    {
        return $this->with('category')->orderBy('updated_at', 'desc')->paginate($limitCount);
    }
}
