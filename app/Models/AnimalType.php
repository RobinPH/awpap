<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AnimalType
 *
 * @property string $id
 * @property string $type
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalType query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AnimalType extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'type',
        'description',
    ];

}
