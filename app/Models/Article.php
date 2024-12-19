<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    'photo',
    'headline',
    'published_at',
    'content',
    'category_article_id',
    ];

    protected $casts = [
        "published_at" => "datetime",
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryArticle::class, 'category_article_id');
    }
}
