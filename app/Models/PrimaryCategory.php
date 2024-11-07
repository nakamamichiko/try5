<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Add\Models\SecondaryCategor;

class PrimaryCategory extends Model
{
    use HasFactory;

    Public function secondary()
    {
        return $this->hasMany(SecondaryCategory::class);
    }
}

