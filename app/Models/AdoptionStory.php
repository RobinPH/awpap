<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AdoptionStory extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        "adoption_id",
        "title",
        "story",
    ];

    public function form(): HasOne
    {
        return $this->hasOne(AdoptionForm::class, "id", "adoption_id");
    }
}
