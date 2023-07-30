<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdoptionForm extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        "user_id",
        "animal_id",
        "prompted_to_adopt",
        "adopted_before",
        "to_adopt_a_specific_shelter_animal",
        "describe_ideal",
        "type_of_building",
        "happens_to_pet",
        "live_with",
        "allergic_to_animals",
        "responsible",
        "financially_responsible",
        "average_workday",
        "steps_to_introduce",
        "everyone_supports",
        "adoption_form_status_id",
    ];

    public function animal(): HasOne
    {
        return $this->hasOne(Animal::class, "id", "animal_id");
    }

    public function adopter(): HasOne
    {
        return $this->hasOne(User::class, "id", "user_id");
    }

    public function status(): HasOne
    {
        return $this->hasOne(AdoptionFormStatus::class, "id", "adoption_form_status_id");
    }

    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class, 'adoption_form_images', 'adoption_form_id', 'image_id');
    }

    public function getStoryAttribute() {
        return AdoptionStory::where("adoption_id", "=", $this->id)->first();
    }
}
