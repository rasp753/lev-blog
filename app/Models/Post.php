<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];

    public function getPaginateByLimit(int $limitCount = 10)
    {
        return $this->orderBy('updated_at', 'desc')->paginate($limitCount);
    }
}
