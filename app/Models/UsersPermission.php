<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UsersPermission
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UserPermission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPermission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPermission query()
 * @property string $id
 * @property string $user_id
 * @property string $permission_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UsersPermission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersPermission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersPermission wherePermissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersPermission whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UsersPermission whereUserId($value)
 * @mixin \Eloquent
 */
class UsersPermission extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        "user_id",
        "permission_id",
    ];
}
