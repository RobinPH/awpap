<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptionFormImage extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        "image_id",
        "adoption_form_id",
    ];
}
