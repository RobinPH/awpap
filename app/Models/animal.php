<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Animal
 *
 * @property string $id
 * @property string $type
 * @property string $name
 * @property string $sex
 * @property string $short_description
 * @property string $age
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Image> $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|Animal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Animal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Animal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereType($value)
 * @property string $thumbnail_id
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereThumbnailId($value)
 * @property-read \App\Models\Image|null $thumbnail
 * @property string $type_id
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereTypeId($value)
 * @property string $birthdate
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AnimalNickname> $nicknames
 * @property-read int|null $nicknames_count
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereBirthdate($value)
 * @property string $sex_id
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereSexId($value)
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Animal whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Animal extends Model
{
    use HasFactory, HasUuids;

    public function type(): HasOne
    {
        return $this->hasOne(AnimalType::class);
    }

    public function sex(): HasOne
    {
        return $this->hasOne(AnimalSex::class);
    }

    public function getAgeAttribute() {
        return floor(date_diff(date_create($this->birthdate), date_create(date("Y-m-d")))->format('%y'));
    }

    public function thumbnail(): HasOne
    {
        return $this->hasOne(Image::class, 'id', 'thumbnail_id');
    }

    public function images()
    {
        return $this->belongsToMany(Image::class, 'animals_images', 'animals_id', 'images_id');
    }

    public function nicknames()
    {
        return $this->hasMany(AnimalNickname::class);
    }
}
