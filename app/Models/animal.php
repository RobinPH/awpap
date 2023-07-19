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
 * @property-read mixed $age_months
 * @property-read mixed $age_months_string
 * @mixin \Eloquent
 */
class Animal extends Model
{
    use HasFactory, HasUuids;

    public function type(): HasOne
    {
        return $this->hasOne(AnimalType::class, "id", "type_id");
    }

    public function sex(): HasOne
    {
        return $this->hasOne(AnimalSex::class, "id", "sex_id");
    }

    public function getAgeAttribute() {
        return floor(date_diff(date_create($this->birthdate), date_create(date("Y-m-d")))->format('%y'));
    }

    public function getAgeMonthsAttribute() {
        return floor(date_diff(date_create($this->birthdate), date_create(date("Y-m-d")))->format('%m'));
    }

    public function getAgeMonthsStringAttribute() {
        $age_months = $this->getAgeMonthsAttribute() % 12;
        $age_years = floor($this->getAgeMonthsAttribute() / 12);

        $str = "";

        if ($age_years != 0 || $age_months == 0) {
            $str .= $age_years . " " . "years ";
        } else if ($age_months != 0) {
            $str .= $age_months . " " . "months ";
        }

        $str .= "old";

        return $str;
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
