<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AboutUs extends Model
{
    protected $fillable = [
        'content',
    ];

    public function photos(): HasMany
    {
        return $this->hasMany(AboutUsPhoto::class);
    }
}
