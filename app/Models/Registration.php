<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    'full_name',
    'email',
    'admission_type',
    'photo',
    'nickname',
    'phone_number',
    'first_major',
    'second_major',
    ];
}
