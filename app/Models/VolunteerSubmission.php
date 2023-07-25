<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class VolunteerSubmission extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        "user_id",
        "volunteer_work_id",
    ];

    public function work(): HasOne
    {
        return $this->hasOne(VolunteerWork::class, "id", "volunteer_work_id");
    }
}
