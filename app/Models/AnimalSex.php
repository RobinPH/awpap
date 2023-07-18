<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AnimalSex
 *
 * @property string $id
 * @property string $sex
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalSex newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalSex newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalSex query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalSex whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalSex whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalSex whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalSex whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnimalSex whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AnimalSex extends Model
{
    use HasFactory, HasUuids;
}
