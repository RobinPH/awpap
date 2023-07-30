<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use App\Models\UsersPermission;

class UserPermissionController extends Controller
{
    public static function addDefaultPermission(User $user) {
        $default_permissions = ["user:profile:edit", "adoption:create", "adoption:edit", "program-form:create", "program-form:edit", "adoption-story:create", "adoption-story:edit"];

        foreach ($default_permissions as $default_permission) {
            $permission = Permission::query()->where("name", "=", $default_permission)->first();

            UsersPermission::query()->create([
                "user_id" => $user->id,
                "permission_id" => $permission->id,
            ]);
        }
    }
}
