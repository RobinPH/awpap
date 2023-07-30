<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $permissions = array(
            "animal:profile:read" => "This permission allows users to view animal profiles, including their details and information.",

            "animal:profile:create" => "Users with this permission can create new animal profiles in the system.",

            "animal:profile:edit" => "With this permission, users are able to modify the information and details of existing animal profiles.",

            "animal:profile:delete" => "Users possessing this permission can delete animal profiles from the system.",

            "animal:type:read" => "This permission grants users access to view various types or categories of animals.",

            "animal:type:create" => "Users with this permission can add new animal types or categories to the system.",

            "animal:type:edit" => "This permission allows users to modify the details and information of existing animal types.",

            "animal:type:delete" => "Users with this permission can remove animal types or categories from the system.",

            "animal:sex:read" => "This permission allows users to view the genders or sexes of animals in the system.",

            "animal:sex:create" => "Users with this permission can add new animal genders or sexes.",

            "animal:sex:edit" => "This permission enables users to modify the details and information of existing animal genders or sexes.",

            "animal:sex:delete" => "Users possessing this permission can delete animal genders or sexes from the system.",

            "article:read" => "This permission allows users to read/view articles in the system.",

            "article:create" => "Users with this permission can create new articles.",

            "article:edit" => "This permission enables users to modify the content and details of existing articles.",

            "article:delete" => "Users possessing this permission can delete articles from the system.",

            "adoption:read" => "This permission allows users to access information related to animal adoptions.",

            "adoption:create" => "Users with this permission can initiate new animal adoption processes.",

            "adoption:edit" => "This permission enables users to modify the details and progress of ongoing animal adoptions.",

            "adoption:delete" => "Users possessing this permission can cancel or remove animal adoption processes from the system.",

            "program:read" => "This permission allows users to view information about programs or events related to animals.",

            "program:create" => "Users with this permission can create new programs or events for animals.",

            "program:edit" => "This permission enables users to modify the details and information of existing animal programs or events.",

            "program:delete" => "Users possessing this permission can delete animal programs or events from the system.",

            "program-form:read" => "This permission allows users to view forms or applications related to animal programs or events.",

            "program-form:create" => "Users with this permission can create new forms or applications for animal programs or events.",

            "program-form:edit" => "This permission enables users to modify the details and information of existing forms or applications for animal programs or events.",

            "program-form:delete" => "Users possessing this permission can delete forms or applications for animal programs or events from the system.",

            "adoption-story:read" => "Allows reading/viewing adoption stories.",

            "adoption-story:create" => "Allows creating new adoption stories.",

            "adoption-story:edit" => "Allows editing/updating adoption stories.",

            "adoption-story:delete" => "Allows deleting adoption stories.",

            "user:profile:read" => "This permission allows users to view user profiles in the system.",

            "user:profile:edit" => "Users with this permission can modify their own user profiles.",

            "user:profile:delete" => "This permission enables users to delete their own user profiles from the system.",

            "admin" => "This is a broad permission that designates the user as an administrator, granting access to various administrative functions.",

            "admin:read" => "This permission allows administrators to view administrative information and settings.",

            "admin:promote" => "Users possessing this permission can promote other users to higher roles or permissions.",

            "admin:demote" => "This permission enables users to demote other users, reducing their roles or permissions.",

            "admin:edit:profile" => "This permission allows administrators to edit user profiles.",

            "admin:edit:permissions" => "Users with this permission can modify permissions and access levels for other users in the system.",
        );

        foreach ($permissions as $name => $description) {
            Permission::query()->create([
                "name" => $name,
                "description" => $description,
            ]);
        }
    }
}
