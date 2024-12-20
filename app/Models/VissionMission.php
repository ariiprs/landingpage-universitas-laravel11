<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VissionMission extends Model
{
    protected $fillable = [
        'visi',
        'misi',
    ];

    public function photos(): HasMany
    {
        return $this->hasMany(VissionMissionPhoto::class);
    }
}
