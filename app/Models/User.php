<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @property string $firstName
 * @property string $lastName
 * @property string $address_id
 * @property string $birthdate
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property \Illuminate\Support\Carbon $deleted_at
 * @property-read \App\Models\UserAddress|null $address
 * @method static \Illuminate\Database\Eloquent\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutTrashed()
 * @property string|null $profile_picture_id
 * @property-read \App\Models\Image|null $profilePicture
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePictureId($value)
 * @property string $first_name
 * @property string $last_name
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, HasUuids;

    protected $_permissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'birthdate',
        'email',
        'address_id',
        'password',
        'google_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function address(): HasOne
    {
        return $this->hasOne(UserAddress::class, "id", "address_id");
    }


    public function profilePicture(): HasOne
    {
        return $this->hasOne(Image::class, 'id', 'profile_picture_id');
    }

    public function getFullNameAttribute() {
        return $this->first_name . " " . $this->last_name;
    }

    public function getFullAddressAttribute() {
        $address = $this->address;
        return $address->address_line_1 . ", " . $address->barangay->name . ", " . $address->municipality->name . ", " . $address->province->name . ", " . $address->region->name;
    }

    public function getIsProfileCompleteAttribute() {

    }

    public function getIsAdminAttribute() {
        $user_permissions = UsersPermission::query()->where("user_id", "=", $this->id)->get();

        foreach ($user_permissions as $user_permission) {
            if ($user_permission->permission->name == "admin") {
                return true;
            }
        }

        return false;
    }

    public function volunteer_submissions(): HasMany
    {
        return $this->hasMany(VolunteerSubmission::class);
    }

    public function adoptions(): HasMany
    {
        return $this->hasMany(AdoptionForm::class);
    }

    public function programs(): HasMany
    {
        return $this->hasMany(ProgramForm::class);
    }

    public function permissions()
    {
        if ($this->_permissions == null) {
            $this->_permissions = $this->belongsToMany(Permission::class, "users_permissions");
        }

        return $this->_permissions;
    }

    public function permissionCan(string $permission) {
        foreach ($this->permissions as $user_permission) {
            if ($user_permission->name == $permission) {
                return true;
            }
        }

        return false;
    }
}
