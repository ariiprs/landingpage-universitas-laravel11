<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lecturer extends Model
{
    protected $fillable = [
        'nomor_induk',
        'name',
        'slug',
        'photo',
        'education',
        'position',
        'topic',
        'category_lecturer_id',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryLecturer::class, 'category_lecturer_id');
    }
}
