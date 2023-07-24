<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            "animal:profile:read",
            "animal:profile:create",
            "animal:profile:edit",
            "animal:profile:delete",

            "animal:type:read",
            "animal:type:create",
            "animal:type:edit",
            "animal:type:delete",

            "animal:sex:read",
            "animal:sex:create",
            "animal:sex:edit",
            "animal:sex:delete",

            "article:read",
            "article:create",
            "article:edit",
            "article:delete",

            "user:read",
            "user:edit",
            "user:delete",

            "admin",

            "admin:read",
            "admin:promote",
            "admin:demote",
            "admin:edit:profile",
            "admin:edit:permissions",
        ];

        foreach ($permissions as $permission) {
            Permission::query()->create([
                "name" => $permission,
            ]);
        }
    }
}
