<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Program extends Model
{
    use HasFactory, HasUuids;

    public function thumbnail(): HasOne
    {
        return $this->hasOne(Image::class, 'id', 'thumbnail_id');
    }
}
