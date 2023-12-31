<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\UserAddress
 *
 * @property int $id
 * @property string $address_line_1
 * @property string|null $address_line_2
 * @property string $city
 * @property string $region
 * @property string $zip_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereAddressLine1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereAddressLine2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAddress whereZipCode($value)
 * @mixin \Eloquent
 */
class UserAddress extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        "address_line_1", "address_line_2", "city", "region", "zip_code"
    ];

    public function barangay(): HasOne
    {
        return $this->hasOne(AddressBarangay::class, "id", "barangay_id");
    }


    public function municipality(): HasOne
    {
        return $this->hasOne(AddressMunicipality::class, "id", "municipality_id");
    }

    public function province(): HasOne
    {
        return $this->hasOne(AddressProvince::class, "id", "province_id");
    }

    public function region(): HasOne
    {
        return $this->hasOne(AddressRegion::class, "id", "region_id");
    }
}
