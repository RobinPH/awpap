<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AnimalNickname
 *
 * @property int $id
 * @property string $animal_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalNickname newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalNickname newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalNickname query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalNickname whereAnimalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalNickname whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalNickname whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalNickname whereUpdatedAt($value)
 * @property string $nickname
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalNickname whereNickname($value)
 * @mixin \Eloquent
 */
class AnimalNickname extends Model
{
    use HasFactory, HasUuids;
}
