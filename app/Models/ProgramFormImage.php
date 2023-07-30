<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramFormImage extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        "image_id",
        "program_form_id",
    ];
}
