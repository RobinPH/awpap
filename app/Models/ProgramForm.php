<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProgramForm extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        "user_id",
        "type_id",
        "breed",
        "how_many",
        "program_id",
        "appointment_date",
        "status_id",
        "other_information",
    ];

    public function program(): HasOne
    {
        return $this->hasOne(Program::class, 'id', 'program_id');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function patient_type(): HasOne
    {
        return $this->hasOne(AnimalType::class, 'id', 'type_id');
    }

    public function status(): HasOne
    {
        return $this->hasOne(ProgramFormStatus::class, 'id', 'status_id');
    }
}
